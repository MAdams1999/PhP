SELECT
	COUNT(*) AS `movies`
FROM
	`member_history`
WHERE
	(`date` between '2006-10-30' AND '2007-07-27') || (MONTH(`date`) = 12 && DAY(`date`) = 24);