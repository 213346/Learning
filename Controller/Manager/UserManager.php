<?php
/**
 * Created by PhpStorm.
 * User: Stratege Takam
 * Date: 29/07/2018
 * Time: 14:55
 */



require_once("../../Model/User.php");
require_once("db.php");

/**
 * @param User $user
 * Add user method
 */
function AddUser(User $user)
{
    //use db to global
    global $db;
    $db = $GLOBALS['dbh'];
    $stmt = $db->prepare("INSERT INTO user(username,email,password,lastName,firstName,phoneNumber,address) VALUES
                                               (:username, :email,:password,:lastName,:firstName,:phoneNumber,:address)");
    $password =  md5($user->password);
    $stmt->bindParam(':username', $user->username);
    $stmt->bindParam(':email', $user->email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':lastName', $user->lastName);
    $stmt->bindParam(':firstName', $user->firstName);
    $stmt->bindParam(':phoneNumber', $user->phoneNumber);
    $stmt->bindParam(':address', $user->address);
    if($stmt->execute() )
    {
        echo ( login($user->email, $user->password));
    }
    else
    {
        echo (json_encode(["error"=>$stmt->errorInfo()]));
    }

}

function updateUser(User $user)
{
    $dbh = $GLOBALS['dbh'];
    $stmt = $dbh->prepare("UPDATE  user SET username=:username, email=:email ,password=:password,
                                                lastName=:lastName,firstName=:firstName,phoneNumber=:phoneNumber
                                                ,address=:address WHERE id=:id");
    $stmt->bindParam(':username', $user->username);
    $stmt->bindParam(':email', $user->email);
    $stmt->bindParam(':password',  $user->password);
    $stmt->bindParam(':lastName', $user->lastName);
    $stmt->bindParam(':firstName', $user->firstName);
    $stmt->bindParam(':phoneNumber', $user->phoneNumber);
    $stmt->bindParam(':address', $user->address);
    $stmt->bindParam(':id', $user->id);

    if($stmt->execute())
    {
        echo (login($user->email, $user->password));
    }
    else
    {
        echo (json_encode(["error"=>$stmt->errorInfo()]));
    }

}


function deleteUser($id)
{
    $dbh = $GLOBALS['dbh'];
    $stmt = $dbh->prepare("DELETE FROM user WHERE id=:id");
    $stmt->bindParam(':id', $id);
    if($stmt->execute() )
    {
        echo (json_encode(["success"=>"Delete as successfull !"]));
    }
    else
    {
        echo (json_encode(["error"=>$stmt->errorInfo()]));
    }
}

function login($email, $password)
{
    $password = md5($password);
    $dbh = $GLOBALS['dbh'];
    $stmt = $dbh->prepare("SELECT * FROM user WHERE (email=:email or username=:email)  and password=:password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    if($stmt->execute())
    {
        //$stmt->fetchAll(\PDO::FETCH_ASSOC);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return json_encode($result);
    }
    else{
        return json_encode( ["error"=>$stmt->errorInfo()]);
    }
}

function findByIdUser($id)
{
    $dbh = $GLOBALS['dbh'];
    $stmt = $dbh->prepare("SELECT * FROM user WHERE id=:id");
    $stmt->bindParam(':id', $id);
    if($stmt->execute())
    {
        //$stmt->fetchAll(\PDO::FETCH_ASSOC);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return json_encode($result);
    }
    else{
        return json_encode( ["error"=>$stmt->errorInfo()]);
    }
}

function findByAllUser()
{
    $dbh = $GLOBALS['dbh'];
    $stmt = $dbh->prepare("SELECT * FROM user ORDER BY id DESC");
    if($stmt->execute())
    {
        //$stmt->fetchAll(\PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($result);
    }
    else{
        return json_encode( ["error"=>$stmt->errorInfo()]);
    }
}

function getCountUser()
{
    $dbh = $GLOBALS['dbh'];
    $stmt = $dbh->prepare("SELECT COUNT(*) as count FROM user ");
    if($stmt->execute())
    {
        //$stmt->fetchAll(\PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($result);
    }
    else{
        return json_encode( ["error"=>$stmt->errorInfo()]);
    }
}



//end manage user











?>