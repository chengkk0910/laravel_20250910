CREATE TABLE `laravel_20250917`.`students` (
    `id` INT(10) NULL AUTO_INCREMENT COMMENT 'id',
    `name` VARCHAR(20) NULL COMMENT '姓名',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO
    `students` (`id`, `name`)
VALUES
    (NULL, 'amy'),
    (NULL, 'bob')
INSERT INTO
    `students` (`id`, `name`)
VALUES
    (NULL, 'cat'),
    (NULL, 'dog'),
    (NULL, 'egg')
UPDATE
    `students`
SET
    `name` = 'bob-change'
WHERE
    `students`.`id` = 2
DELETE FROM
    `students`
WHERE
    `students`.`id` = 4;

CREATE TABLE `laravel_20250917`.`students` (
    `id` INT(10) NULL AUTO_INCREMENT COMMENT 'id',
    `name` VARCHAR(20) NULL COMMENT '姓名',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `laravel_0910`.`cars` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `color` INT NULL DEFAULT '0' COMMENT 'color 代號',
    `date` DATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `laravel_0910`.`cars` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `color` VA NULL DEFAULT '0' COMMENT 'color 代號',
    `color` VA NULL DEFAULT '0' COMMENT 'color 代號',
    `color` VA NULL DEFAULT '0' COMMENT 'color 代號',
    `date` VATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
    `date` VATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
    `date` VATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

SELECT
    ProductID,
    ProductName,
    CategoryName
FROM
    Products
    INNER JOIN Categories ON Products.CategoryID = Categories.CategoryID;


SELECT
    students.id,
    students.name,
    phones.phone
FROM
    students
    LEFT JOIN phones ON students.id = phones.student_id;