<?php
namespace ChatApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use ChatApp\Entities\Message;


class Chat implements MessageComponentInterface {
    
    
    private $clients;
    
    public function __construct(){
        $this->clients = new \SplObjectStorage;
    }
    
    public function onOpen(ConnectionInterface $conn){
         $this->clients->attach($conn);

        echo "New user connected ({$conn->resourceId})\n";
        
//        $conn->send(json_encode(array('id' => $conn->resourceId)));
    }
    
    public function onMessage(ConnectionInterface $from, $data){
        
//        var_dump($this->clients); exit;
        
        $data = json_decode($data);
        $action = $data->action;
        
        // on user join
        if($action == 'user_join') {
            $connected = []; // ids of connected clients

            // collect ids of connected clients
             foreach ($this->clients as $client) {
                if ($from !== $client) {
    //                $client->send($data->action);
                    array_push($connected, $client->resourceId);
                }
              }

            // forward connected clients to user
            $from->send(json_encode(array(
                'action' => 'user_join',
                'id' => $from->resourceId,
                'connected' => $connected
            )));
        }
        
        // send message to recipient
        if($action == 'send_message') {
             foreach ($this->clients as $client) {
                if ($from !== $client && $data->to == $client->resourceId) {
                    $client->send(json_encode(array(
                        'action' => 'receive_message',
                        'msg' => $data->msg
                    )));
                }
             }
        }
    }
    
    public function onClose(ConnectionInterface $conn){
        $this->clients->detach($conn);
      echo "someone {$conn->resourceId} has disconnected\n";
        
    }
    
    public function onError(ConnectionInterface $conn, \Exception $e){
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
    
}


?>