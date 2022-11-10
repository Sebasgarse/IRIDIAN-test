CREATE DATABASE `school`;

USE `school`;

DROP TABLE IF EXISTS `student_answer`;
DROP TABLE IF EXISTS `answer`;
DROP TABLE IF EXISTS `student_free_answer`;
DROP TABLE IF EXISTS `question`;
DROP TABLE IF EXISTS `free_question`;
DROP TABLE IF EXISTS `finished_test`;
DROP TABLE IF EXISTS `test`;
DROP TABLE IF EXISTS `student`;

CREATE TABLE IF NOT EXISTS `test`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `title` VARCHAR(255) NOT NULL, 
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1'
);

insert  into `test`(`title`) values 
('prueba');

CREATE TABLE IF NOT EXISTS `free_question`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `test_id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`test_id`) 
        REFERENCES `test`(`id`)
        ON DELETE CASCADE
);

insert  into `free_question`(`test_id`,`title`) values 
(1,'pregunta libre');

CREATE TABLE IF NOT EXISTS `question`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `test_id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`test_id`) 
        REFERENCES `test`(`id`)
        ON DELETE CASCADE
);

insert  into `question`(`test_id`,`title`) values 
(1,'primera'),
(1,'segunda'),
(1,'tercera');

CREATE TABLE IF NOT EXISTS `answer`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `question_id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `points` INT NOT NULL DEFAULT '0',
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`question_id`) 
        REFERENCES `question`(`id`)
        ON DELETE CASCADE
);

insert  into `answer`(`question_id`,`title`,`points`) values 
(1,'a', 1),
(1,'b', 0),
(2,'a', 0),
(2,'b', 1),
(3,'a', 1),
(3,'b', 0);

CREATE TABLE IF NOT EXISTS `student`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1'
);

insert  into `student`(`name`,`surname`) values 
('Juanin Juan', 'Jarry'),
('Juan Carlos', 'Bodoque'),
('Tulio', 'Triviño');

CREATE TABLE IF NOT EXISTS `finished_test`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `test_id` INT NOT NULL,
    `student_id` INT NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`test_id`) 
        REFERENCES `test`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`student_id`) 
        REFERENCES `student`(`id`)
        ON DELETE CASCADE
);

insert  into `finished_test`(`test_id`,`student_id`) values 
('1', '1'),
('1', '2'),
('1', '3');

CREATE TABLE IF NOT EXISTS `student_answer`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `finished_test_id` INT NOT NULL,
    `question_id` INT NOT NULL,
    `answer_id` INT NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`finished_test_id`) 
        REFERENCES `finished_test`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`question_id`) 
        REFERENCES `question`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`answer_id`) 
        REFERENCES `answer`(`id`)
        ON DELETE CASCADE
);

insert  into `student_answer`(`finished_test_id`,`question_id`, `answer_id`) values 
('1', '1', '1'),
('1', '2', '1'),
('1', '3', '2'),
('2', '1', '1'),
('2', '2', '2'),
('2', '3', '1'),
('3', '1', '2'),
('3', '2', '2'),
('3', '3', '1');

CREATE TABLE IF NOT EXISTS `student_free_answer`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `finished_test_id` INT NOT NULL,
    `free_question_id` INT NOT NULL,
    `answer` TEXT NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`finished_test_id`) 
        REFERENCES `finished_test`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`free_question_id`) 
        REFERENCES `free_question`(`id`)
        ON DELETE CASCADE
);

insert  into `student_free_answer`(`finished_test_id`,`free_question_id`, `answer`) values 
('1', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eleifend ligula. Etiam ornare pellentesque iaculis. Maecenas rutrum ultricies lectus, nec molestie turpis euismod semper.'),
('2', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eleifend ligula. Etiam ornare pellentesque iaculis. Maecenas rutrum ultricies lectus, nec molestie turpis euismod semper.'),
('3', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eleifend ligula. Etiam ornare pellentesque iaculis. Maecenas rutrum ultricies lectus, nec molestie turpis euismod semper.');

