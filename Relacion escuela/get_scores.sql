use `school`;

SELECT students.name as `Nombre`, sum(answers.score) as `Puntaje` FROM students
LEFT JOIN student_answers ON student_answers.student_id = students.id
LEFT JOIN answers ON student_answers.answer_id = answers.id
LEFT JOIN questions ON questions.id = answers.question_id
WHERE questions.test_id = 1
GROUP BY students.id