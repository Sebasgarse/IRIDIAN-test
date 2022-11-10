CREATE DATABASE `school`;

USE `school`;

DROP TABLE IF EXISTS `test`;

CREATE TABLE IF NOT EXISTS `test`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `title` VARCHAR(255) NOT NULL, 
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1'
);

DROP TABLE IF EXISTS `free_question`;

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

DROP TABLE IF EXISTS `question`;

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

DROP TABLE IF EXISTS `answer`;

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

DROP TABLE IF EXISTS `student`;

CREATE TABLE IF NOT EXISTS `student`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1'
);

DROP TABLE IF EXISTS `finished_test`;

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

DROP TABLE IF EXISTS `student_answer`;

CREATE TABLE IF NOT EXISTS `student_answer`
(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `finished_test_id` INT NOT NULL,
    `question_id` INT NOT NULL,
    `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active` tinyint DEFAULT '1',
    FOREIGN KEY (`finished_test_id`) 
        REFERENCES `finished_test`(`id`)
        ON DELETE CASCADE,
    FOREIGN KEY (`question_id`) 
        REFERENCES `question`(`id`)
        ON DELETE CASCADE
);

DROP TABLE IF EXISTS `student_free_answer`;

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

