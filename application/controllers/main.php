<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {	

  function __construct()
    {
        parent::__construct();
        $this->load->model('users');

 

    }
 
    public function index()
    {

        header("Content-Type: application/json"); 

        $data['messages'] = [];
        $data['from'] = [];
        $username = 'jonathan';
        $name = $this->users->name = 'Jonathan';
       // $this->Users->message = ('wasup');

        $data['exampleName'] = $name;

        $query = $this->db->query('SELECT * FROM pm where  user2 ='.$this->db->escape($username).'');

    foreach ($query->result() as $row)
    {
        //$row->message;
        array_push($data['messages'],$row->message);
        array_push($data['from'],$row->user1);



    }

    //var_dump($data);
    // return $data;
    




    $jsonstring = json_encode($data,true);
    echo $jsonstring;

    




    //$this->load->view('home',$data);



    // $username = 'Jonjon';
    // $password = '12345';



 //$sql = "INSERT INTO users(username, password) VALUES (".$this->db->escape($username).", ".$this->db->escape($password).")";
	// // $this->db->query($sql);
	// // echo $this->db->affected_rows();

	// foreach ($query->result() as $row)
	// {
 //        echo $row->name;

	// }

	    // $this->load->model('Users');
     //    $this->Users->name = ('Jean');
     //    $this->Users->load('Jean');
     //    //$this->Users->save();
     //    echo '<tt><pre>' . var_export( $this->Users, TRUE) . '</pre></tt>';

		// echo 'Total Results: ' . $query->num_rows();

  //       echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
  //       die();
    }

    public function requestForm(){

    $this->load->view('requestForm');

    }
    public function processForm(){

    $timeIn = $this->input->post('timeIn');
    $timeOut = $this->input->post('timeOut');
    $money = $this->input->post('money');
    $description = $this->input->post('description');


    $timeStamp = date('Y-m-d G:i:s');


     echo $date;



    $query = $this->db->query('Insert into ßlocation(timeIn,timeOut,money,description) values ('.$this->db->escape($timeIn).', '.$this->db->escape($timeOut).','.$this->db->escape($money).','.$this->db->escape($description).')');

        
    }
    public function sendMessage(){


    }
    public function readMessage(){

    }

}
