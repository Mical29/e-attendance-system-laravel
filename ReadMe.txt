*/ File Structure */

 --- /resources/views/ ---

/admin/create_user.blade.php <-- We are Here (Bob)

/admin/create_role.blade.php

/admin/create_permission.blade.php

/admin/create_class.blade.php <-- We are Here (Bob)

/admin/create_course.blade.php <-- We are Here (Martin)

/admin/create_timetable.blade.php 

/student/student_detail.blade.php

/student/student_lists.blade.php

/shared/timetable_lists.blade.php

/shared/timetable_detail.blade.php

/shared/course_lists.blade.php

/shared/course_detail.blade.php

/teacher/teacher_detail.blade.php

/teacher/teacher_lists.blade.php

*/ Link Structure */

get: / -> home page

get: /users/id -> user(student,teacher,admin,staff) detail
get: /users/create/ --> get form
post: /users/create/ --> save in database 

get: /course/id -> course detail with id
get: /course/create/ -> get form
post: /course/create/ -> save course in database

get: /courses/id -> display course_detail 


