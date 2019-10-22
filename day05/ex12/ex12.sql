SELECT
    `last_name`,
    `first_name`
FROM
    `user_card`
WHERE
    `user_card`.`last_name` LIKE '%-%' || `user_card`.`first_name` LIKE '%-%'
ORDER BY
    `user_card`.`last_name` ASC,
    `user_card`.`first_name` ASC;