*/ File Structure */

 --- /resources/views/ ---

/admin/create_user.blade.php

/admin/create_role.blade.php

/admin/create_permission.blade.php

/admin/create_course.blade.php

/admin/create_timetable.blade.php

/student/student_detail.blade.php

/student/student_lists.blade.php
@foreea

/shared/timetable_lists.blade.php

/shared/timetable_detail.blade.php

/shared/course_lists.blade.php

/shared/course_detail.blade.php

/teacher/teacher_detail.blade.php

/teacher/teacher_lists.blade.php

*/ Link Structure */

get: / -> home page

post: /uer/ -> add user
get: /user/id -> user(student,teacher,admin,staff) detail

get: /courses/ -> display course_lists
post: /courses/ -> save course

get: /courses/id -> display course_detail 


