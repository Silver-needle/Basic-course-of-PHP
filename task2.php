<?php
class TaskService
{
   public static function addComment(User $user, Task $task, string $text): void {
      $comment = new Comment($user,$task,$text);
      $task->addComment($comment);
   }
}

class addComment
{
   private User $author;
   private Task $task;
   private string $text;

   public function __construct(User $author, Task $task, string $text) {
      $this->author = $author;
      $this->task = $task;
      $this->text = $text;
   }
}
class Task
{
   private User $user;
   private int $priority;
   private string $description;

   private string $dateCreated;

   private string $dateUpdated;

   private bool $isDone = false;
   private string $dateDone;

   private array $comments;

function __construct(User $user, int $priority, string $description) {
   $this->user = $user;
   $this->priority = $priority;
   $this->description = $description;
   $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s');
}

public function setDescription(string $description): void {
   $this->description = $description;
   $this->dateUpdated = date('Y-m-d H:i:s');
}
public function getDescription(): string {
   return $this->description;
}

public function markAsDone(): void {
   $this->dateDone = $this->dateUpdated = date('Y-m-d H:i:s');
   $this->isDone = true;
}

public function addComment(Comment $comment): void {
   $this->comments[] = $comment;
}
}

class User
{
   private string $username;
   private string $email;

   function __construct(string $username, string $email) {
      $this->username = $username;
      $this->email = $email;
   }
}

$user = new User('Ivan', 'ivan@mail.ru');
$task = new Task ($user, 1, 'Little');
$task->setDescription('newDescription');
$task->markAsDone();

$user2 = new User('Victor', 'victor@mail.ru');
TaskService:: addComment($user2,$task,'Ehoho')
var_dump($task);
?>