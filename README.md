
##Installation

Clone Repository: git clone

Change database settings under Database/config

Import dump file to database service

##Usage

In table 'test', put your quizz name under column 'name'.
Put your own tables which contains questions and options.
Table name must be the same as quizz name, but at the end it must be '_q' for question table and '_o' for option table. 
Question table contains Id(int) and question(varchar).
-Under 'question' column is your questions. 
Option table contains Id (int), question_id(int), answer(varchar) and correct(int).
-Under 'question_id' is your Id from your 'question' table question.
-Under 'answer' is your answer.
-Under 'correct' imeans if your answer is correct

##Example

Let say quizz name is 'best_employee'. 
We have have to add two tables. First is 'best_employee_q' and second is 'best_employee_o'.
Now in the first table 'best_employee_q' we enter questions. Like 

