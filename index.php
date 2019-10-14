<?php


$data = array(


);

$id = 3232;

$pass = "12345678";

$yes = new Yes();

$y = new YesQuery();

$y->query("(MyGuests/{$id}/([id=1323,firstname,lastname]))");

$y->query("SELECT id, firstname, lastname FROM MyGuests WHERE id = {$id}");

$result = $y->setFetchMode(PDO::FETCH_ASSOC);

foreach ($y->fetchAll() as $key => $value) {

} 

$user;

if(count($y->cd("users")->exit())<=0){

    echo "Data empty!";

    return;

    if($y->error == YESE::CD_NOT){


    }

}else{

    foreach ($y->out() as $value) {

        if($value->select($id)->exit()!=null){

            $value->quit($user);

        }
        
    }
    
}

if($user->select("password")->exit() == $pass){

    login_done();

}else{

    login_fail();

}

function login_done(){


}

function login_fail(){


}



