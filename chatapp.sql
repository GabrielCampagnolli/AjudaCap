
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `bairro`(
  `chat_bairro` int NOT NULL,
  `user_id` int NOT NULL,
  `id` int NOT NULL,
 `name` varchar(100) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `bairro`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `bairro`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bairro_id` int NOT NULL,
  FOREIGN KEY (bairro_id) references bairro(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `chatSaoJose`(
  `id` int NOT NULL,
  `id_bairro_chat` int NOT NULL,
  `id_usu` int not null,
  `msg_id` int not null,
  `msg_txt` varchar(255) not null,
  `msg_id_usu` int not null
);
ALTER TABLE `ChatSaoJose`
  ADD PRIMARY KEY (`msg_id`);
  
ALTER TABLE `chatSaoJose`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);



ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
insert into `bairro`(chat_bairro,user_id,id,name)
values(1,1,1,'São José');
insert into `chatSaoJose`(id,id_bairro_chat,id_usu,msg_txt,msg_id_usu)
values(1,1,1,"Bem vindo(a)!!",1);