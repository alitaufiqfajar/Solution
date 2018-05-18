SELECT
    posts.title,
    users.username,
    comments.comment
FROM
    posts,
    users,
    comments
WHERE
    users.id = posts.createdBy