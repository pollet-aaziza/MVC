<?php
function getMessages($db, $volunteer){
$query = $db->prepare("SELECT m.*, v.pseudo FROM messages AS m INNER JOIN volunteer AS v ON m.sender = v.id WHERE getter = ?");
  //la fonctuion excute attend un tableu quoi qu'il arrive
  $request->execute([$volunteer["id"]]);
  //$result est à mettre dans le controller quand on appelle la function
  $result = $request->fetchall(PDO::FETCH_ASSOC);
  return $result;
}

// function addMessage($db, $message, $sender) {
//
//   $query = $db->prepare("INSERT INTO messages(sender, getter, object, message) VALUES (:sender, :getter, :object, :message)");
//   $result = $query->execute([
//     "contents" => $message["contents"],
//     "sender" => $sender,
//     "getter" => $message["pseudo"],
//     "object" => $message["object"]
//   ]);
//   $query->closeCursor();
//   return $result;
// }
// function deleteMessage($db, $id) {
//   $request = $db->prepare("DELETE FROM Messages WHERE id = ?");
//   $result = $request->execute([$id]);
//   $request->closeCursor();
//   return $result;
//  ?>
