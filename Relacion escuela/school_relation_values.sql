CREATE DATABASE `school`;

USE `school`;

DROP TABLE IF EXISTS `student_answers`;
DROP TABLE IF EXISTS `answers`;
DROP TABLE IF EXISTS `questions`;
DROP TABLE IF EXISTS `tests`;
DROP TABLE IF EXISTS `students`;

CREATE TABLE IF NOT EXISTS `tests`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `title` VARCHAR(255) NOT NULL, 
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert  into `tests`(`title`) values 
('prueba');

CREATE TABLE IF NOT EXISTS `questions`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `test_id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `is_free` TINYINT NOT NULL DEFAULT '0',
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`test_id`) 
        REFERENCES `tests`(`id`)
        ON DELETE CASCADE
);

insert  into `questions`(`test_id`,`title`) values 
(1,'primera'),
(1,'segunda'),
(1,'tercera');

insert  into `questions`(`test_id`,`title`, `is_free`) values 
(1,'pregunta libre', 1);

CREATE TABLE IF NOT EXISTS `answers`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `question_id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `score` INT NOT NULL DEFAULT '0',
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`question_id`) 
        REFERENCES `questions`(`id`)
        ON DELETE CASCADE
);

insert  into `answers`(`question_id`,`title`,`score`) values 
(1,'a', 1),
(1,'b', 0),
(2,'a', 0),
(2,'b', 1),
(3,'a', 1),
(3,'b', 0);

CREATE TABLE IF NOT EXISTS `students`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1'
);

insert  into `students`(`name`,`surname`) values 
('Juanin Juan', 'Jarry'),
('Juan Carlos', 'Bodoque'),
('Tulio', 'Triviño');

CREATE TABLE IF NOT EXISTS `student_answers`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `student_id` INT NOT NULL,
    `question_id` INT NOT NULL,
    `answer_id` INT DEFAULT NULL,
    `answer` TEXT DEFAULT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`student_id`) 
        REFERENCES `students`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`question_id`) 
        REFERENCES `questions`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`answer_id`) 
        REFERENCES `answers`(`id`)
        ON DELETE CASCADE
);

insert  into `student_answers`(`student_id`,`question_id`, `answer_id`) values 
('1', '1', '1'),
('1', '2', '3'),
('1', '3', '6'),
('2', '1', '1'),
('2', '2', '4'),
('2', '3', '5'),
('3', '1', '2'),
('3', '2', '4'),
('3', '3', '5');

insert  into `student_answers`(`student_id`,`question_id`, `answer`) values 
('1', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eleifend ligula. Etiam ornare pellentesque iaculis. Maecenas rutrum ultricies lectus, nec molestie turpis euismod semper.'),
('2', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eleifend ligula. Etiam ornare pellentesque iaculis. Maecenas rutrum ultricies lectus, nec molestie turpis euismod semper.'),
('3', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eleifend ligula. Etiam ornare pellentesque iaculis. Maecenas rutrum ultricies lectus, nec molestie turpis euismod semper.');

