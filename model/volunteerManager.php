<?php
//function to add a volunteer to db
  function addVolunteer($db, $volunteer){
    $query = $db->prepare("INSERT INTO volunteer (name, surname, age, comment, availability, street, city) VALUES(:name, :surname, :age, :comment, :availability, :street, :city)");
    $result = $query->execute([
    "name" => $volunteer["name"],
    "surname" => $volunteer["surname"],
    "age" => $volunteer["age"],
    "comment" => $volunteer["comment"],
    "availability" => $volunteer["availability"],
    "street" => $volunteer["street"],
    "city" =>$volunteer["city"]
  ]);
  return $result;
  }
//function get all volunteers from data base
function getVolunteers($db){
$query = $db->query("SELECT * FROM volunteer");
$result = $query->fetchall(PDO::FETCH_ASSOC);
  return $result;
  }

  //function get one volunteer
  function getVolunteer($db, $id) {
  $query = $db->prepare("SELECT * FROM volunteer WHERE id=?");
  $query->execute([$id]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
}
//function get one volunteer by its pseudo
function getVolunteerByPseudo($db, $pseudo) {
$query = $db->prepare("SELECT * FROM volunteer WHERE pseudo=?");
$query->execute([$pseudo]);
$result = $query->fetch(PDO::FETCH_ASSOC);
return $result;
}


//fonction to update volunteer's data on db
function updateVolunteer($db,$volunteer){
 $query = $db->prepare("UPDATE volunteer SET name= :name, surname = :surname, age = :age, comment = :comment, availability= :availability, street = :street, city = :city WHERE id = :id");
 $result = $query->execute([
 "name" => $volunteer["name"],
 "surname" => $volunteer["surname"],
 "age" => $volunteer["age"],
 "comment" => $volunteer["comment"],
 "availability" => $volunteer["availability"],
 "street" => $volunteer["street"],
 "city" =>$volunteer["city"]
 ]);
 return $result;
}

//function deletting volunteer from data base.
function deleteVolunteer($id, $db){
  $query = $db->prepare("DELETE FROM volunteer WHERE id = ?");
  $result = $query->execute([$id]);
  return $result;
}
 ?>
