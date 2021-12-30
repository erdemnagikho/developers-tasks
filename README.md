## Applied Design Pattern
Factory design pattern applied for inserting tasks to DB.

## For Migration
php artisan migrate

## For Assigning Tasks For Developers
php artisan assign:tasks

## For Request
/api/tasks/assigned

## Example Response
    "data": [
        {
            "id": 1,
            "dev": "DEV1",
            "difficulty": 1,
            "estimated_hours": 23,
            "estimated_weeks": "0.5",
            "estimated_months": "0.1",
            "tasks": [
                {
                    "id": 18,
                    "task_name": "IT Task 17",
                    "difficulty": 3,
                    "estimated_hour": "3.0"
                },
                {
                    "id": 26,
                    "task_name": "IT Task 25",
                    "difficulty": 3,
                    "estimated_hour": "3.0"
                },
                {
                    "id": 40,
                    "task_name": "IT Task 39",
                    "difficulty": 4,
                    "estimated_hour": "4.0"
                },
                {
                    "id": 54,
                    "task_name": "IT Task 53",
                    "difficulty": 3,
                    "estimated_hour": "3.0"
                },
                {
                    "id": 62,
                    "task_name": "IT Task 61",
                    "difficulty": 1,
                    "estimated_hour": "1.0"
                },
                {
                    "id": 105,
                    "task_name": "Business Task 37",
                    "difficulty": 4,
                    "estimated_hour": "4.0"
                },
                {
                    "id": 117,
                    "task_name": "Business Task 49",
                    "difficulty": 5,
                    "estimated_hour": "5.0"
                }
            ]
        }
      ]
