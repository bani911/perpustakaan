<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-29 08:53:58 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 13:27:17 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 13:42:54 --> 404 Page Not Found: admin/Master_members/index
ERROR - 2024-04-29 13:42:54 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 13:50:17 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 13:50:28 --> Severity: error --> Exception: /var/www/html/perpus/application/models/Master_members_model.php exists, but doesn't declare class Master_members_model /var/www/html/perpus/system/core/Loader.php 340
ERROR - 2024-04-29 14:08:36 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 14:10:23 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 14:10:46 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 14:19:22 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 14:55:00 --> 404 Page Not Found: admin/Master_borrow/index
ERROR - 2024-04-29 14:55:12 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 14:55:13 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/list.php 39
ERROR - 2024-04-29 14:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perpus/application/views/admin/master_loans/list.php 39
ERROR - 2024-04-29 15:08:40 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:08:42 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:16:29 --> Severity: Notice --> Undefined property: Master_loans::$loan /var/www/html/perpus/application/controllers/admin/Master_loans.php 49
ERROR - 2024-04-29 15:16:29 --> Severity: error --> Exception: Call to a member function create_loan() on null /var/www/html/perpus/application/controllers/admin/Master_loans.php 49
ERROR - 2024-04-29 15:20:51 --> Severity: error --> Exception: Call to undefined method Master_loans_model::rules() /var/www/html/perpus/application/controllers/admin/Master_loans.php 110
ERROR - 2024-04-29 15:22:17 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:22:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;book_id&quot; of relation &quot;members&quot; does not exist
LINE 1: INSERT INTO &quot;members&quot; (&quot;book_id&quot;, &quot;member_id&quot;, &quot;due_date&quot;) V...
                               ^ /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 15:22:24 --> Query error: ERROR:  column "book_id" of relation "members" does not exist
LINE 1: INSERT INTO "members" ("book_id", "member_id", "due_date") V...
                               ^ - Invalid query: INSERT INTO "members" ("book_id", "member_id", "due_date") VALUES ('1', '1', '2024-05-05')
ERROR - 2024-04-29 15:26:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;book_id&quot; of relation &quot;members&quot; does not exist
LINE 1: INSERT INTO &quot;members&quot; (&quot;book_id&quot;, &quot;member_id&quot;, &quot;due_date&quot;) V...
                               ^ /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 15:26:50 --> Query error: ERROR:  column "book_id" of relation "members" does not exist
LINE 1: INSERT INTO "members" ("book_id", "member_id", "due_date") V...
                               ^ - Invalid query: INSERT INTO "members" ("book_id", "member_id", "due_date") VALUES ('1', '1', '2024-05-05')
ERROR - 2024-04-29 15:26:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;book_id&quot; of relation &quot;members&quot; does not exist
LINE 1: INSERT INTO &quot;members&quot; (&quot;book_id&quot;, &quot;member_id&quot;, &quot;due_date&quot;) V...
                               ^ /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 15:26:55 --> Query error: ERROR:  column "book_id" of relation "members" does not exist
LINE 1: INSERT INTO "members" ("book_id", "member_id", "due_date") V...
                               ^ - Invalid query: INSERT INTO "members" ("book_id", "member_id", "due_date") VALUES ('1', '1', '2024-05-05')
ERROR - 2024-04-29 15:29:16 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:29:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;book_id&quot; of relation &quot;members&quot; does not exist
LINE 1: INSERT INTO &quot;members&quot; (&quot;book_id&quot;, &quot;member_id&quot;, &quot;due_date&quot;) V...
                               ^ /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 15:29:23 --> Query error: ERROR:  column "book_id" of relation "members" does not exist
LINE 1: INSERT INTO "members" ("book_id", "member_id", "due_date") V...
                               ^ - Invalid query: INSERT INTO "members" ("book_id", "member_id", "due_date") VALUES ('1', '1', '2024-05-05')
ERROR - 2024-04-29 15:30:09 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 15:30:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 15:31:16 --> Severity: Notice --> Undefined variable: loan /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 15:31:16 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 15:31:16 --> Severity: Notice --> Undefined variable: loan /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 15:31:16 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 15:31:19 --> Severity: Notice --> Undefined variable: loan /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 15:31:19 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 15:31:19 --> Severity: Notice --> Undefined variable: loan /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 15:31:19 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 15:32:00 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:32:10 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:32:44 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 15:32:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 15:34:45 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:34:51 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:35:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;loans&quot; violates foreign key constraint &quot;loans_member_id_fkey&quot;
DETAIL:  Key (member_id)=(2) is not present in table &quot;members&quot;. /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 15:35:02 --> Query error: ERROR:  insert or update on table "loans" violates foreign key constraint "loans_member_id_fkey"
DETAIL:  Key (member_id)=(2) is not present in table "members". - Invalid query: INSERT INTO "loans" ("book_id", "member_id", "due_date") VALUES ('1', '2', '2024-05-07')
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Trying to get property 'email' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Trying to get property 'phone' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Trying to get property 'address' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 15:38:37 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 15:39:39 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:41:31 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:47:56 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 15:57:17 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:00:00 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:00:04 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/extend_loan_form.php 44
ERROR - 2024-04-29 16:00:04 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/extend_loan_form.php 44
ERROR - 2024-04-29 16:00:30 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/extend_loan_form.php 44
ERROR - 2024-04-29 16:00:30 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/extend_loan_form.php 44
ERROR - 2024-04-29 16:01:27 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:01:29 --> Severity: Notice --> Undefined index: name /var/www/html/perpus/application/models/Master_loans_model.php 66
ERROR - 2024-04-29 16:01:29 --> Severity: Notice --> Undefined index: email /var/www/html/perpus/application/models/Master_loans_model.php 67
ERROR - 2024-04-29 16:01:29 --> Severity: Notice --> Undefined index: phone /var/www/html/perpus/application/models/Master_loans_model.php 68
ERROR - 2024-04-29 16:01:29 --> Severity: Notice --> Undefined index: address /var/www/html/perpus/application/models/Master_loans_model.php 69
ERROR - 2024-04-29 16:01:29 --> Severity: Notice --> Undefined index: id /var/www/html/perpus/application/models/Master_loans_model.php 74
ERROR - 2024-04-29 16:01:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;name&quot; of relation &quot;loans&quot; does not exist
LINE 1: UPDATE &quot;loans&quot; SET &quot;name&quot; = NULL, &quot;email&quot; = NULL, &quot;phone&quot; = ...
                           ^ /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 16:01:29 --> Query error: ERROR:  column "name" of relation "loans" does not exist
LINE 1: UPDATE "loans" SET "name" = NULL, "email" = NULL, "phone" = ...
                           ^ - Invalid query: UPDATE "loans" SET "name" = NULL, "email" = NULL, "phone" = NULL, "address" = NULL
WHERE "id" IS NULL
ERROR - 2024-04-29 16:01:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/perpus/system/core/Exceptions.php:271) /var/www/html/perpus/system/core/Common.php 570
ERROR - 2024-04-29 16:02:38 --> Severity: Notice --> Undefined index: name /var/www/html/perpus/application/models/Master_loans_model.php 66
ERROR - 2024-04-29 16:02:38 --> Severity: Notice --> Undefined index: email /var/www/html/perpus/application/models/Master_loans_model.php 67
ERROR - 2024-04-29 16:02:38 --> Severity: Notice --> Undefined index: phone /var/www/html/perpus/application/models/Master_loans_model.php 68
ERROR - 2024-04-29 16:02:38 --> Severity: Notice --> Undefined index: address /var/www/html/perpus/application/models/Master_loans_model.php 69
ERROR - 2024-04-29 16:02:38 --> Severity: Notice --> Undefined index: id /var/www/html/perpus/application/models/Master_loans_model.php 74
ERROR - 2024-04-29 16:02:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;name&quot; of relation &quot;loans&quot; does not exist
LINE 1: UPDATE &quot;loans&quot; SET &quot;name&quot; = NULL, &quot;email&quot; = NULL, &quot;phone&quot; = ...
                           ^ /var/www/html/perpus/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2024-04-29 16:02:38 --> Query error: ERROR:  column "name" of relation "loans" does not exist
LINE 1: UPDATE "loans" SET "name" = NULL, "email" = NULL, "phone" = ...
                           ^ - Invalid query: UPDATE "loans" SET "name" = NULL, "email" = NULL, "phone" = NULL, "address" = NULL
WHERE "id" IS NULL
ERROR - 2024-04-29 16:02:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/perpus/system/core/Exceptions.php:271) /var/www/html/perpus/system/core/Common.php 570
ERROR - 2024-04-29 16:05:19 --> Severity: error --> Exception: Too few arguments to function Master_loans_model::update_extend_loan(), 0 passed in /var/www/html/perpus/application/controllers/admin/Master_loans.php on line 164 and exactly 1 expected /var/www/html/perpus/application/models/Master_loans_model.php 77
ERROR - 2024-04-29 16:06:51 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:06:51 --> Severity: Notice --> Undefined index: id /var/www/html/perpus/application/models/Master_loans_model.php 81
ERROR - 2024-04-29 16:07:53 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:07:53 --> Severity: Notice --> Undefined index: id /var/www/html/perpus/application/models/Master_loans_model.php 81
ERROR - 2024-04-29 16:07:57 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:07:59 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:07:59 --> Severity: Notice --> Undefined index: id /var/www/html/perpus/application/models/Master_loans_model.php 81
ERROR - 2024-04-29 16:09:28 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:09:28 --> Severity: Notice --> Undefined index: id /var/www/html/perpus/application/models/Master_loans_model.php 81
ERROR - 2024-04-29 16:09:28 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:10:24 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:11:05 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:11:09 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 79
ERROR - 2024-04-29 16:12:53 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:12:54 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:12:54 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:12:55 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:12:55 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:12:55 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:12:55 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:13:00 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:13:56 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:13:56 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:13:59 --> Severity: Notice --> Undefined index: due_date /var/www/html/perpus/application/models/Master_loans_model.php 80
ERROR - 2024-04-29 16:13:59 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:22:42 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Trying to get property 'email' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Trying to get property 'phone' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Trying to get property 'address' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 16:22:48 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 16:22:48 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:23:24 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Trying to get property 'email' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Trying to get property 'phone' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Trying to get property 'address' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 16:23:46 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 16:24:14 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:26:43 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 16:51:15 --> Severity: error --> Exception: Call to undefined method Master_returns_model::rules() /var/www/html/perpus/application/controllers/admin/Master_loans.php 173
ERROR - 2024-04-29 16:56:21 --> 404 Page Not Found: admin/Master_loans/create_loan
ERROR - 2024-04-29 16:56:21 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:05:12 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:05:15 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/controllers/admin/Master_loans.php 156
ERROR - 2024-04-29 17:05:15 --> Severity: error --> Exception: Call to a member function getById() on null /var/www/html/perpus/application/controllers/admin/Master_loans.php 156
ERROR - 2024-04-29 17:06:26 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:06:35 --> 404 Page Not Found: 
ERROR - 2024-04-29 17:10:55 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:11:09 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 43
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Trying to get property 'email' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 52
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Trying to get property 'phone' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 61
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Trying to get property 'address' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 69
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Undefined variable: m_members /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 17:13:29 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/edit_form.php 78
ERROR - 2024-04-29 17:19:23 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 17:19:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 17:19:25 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 17:19:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:19:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:21:06 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::getAll() /var/www/html/perpus/application/models/Master_loans_model.php 48
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:22:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:25:03 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'book_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 44
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'member_id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 47
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'loan_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 50
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'due_date' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 53
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'returned' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 56
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 60
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 61
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 63
ERROR - 2024-04-29 17:25:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perpus/application/views/admin/master_loans/list.php 64
ERROR - 2024-04-29 17:26:04 --> Severity: Notice --> Undefined variable: m_loans /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 17:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perpus/application/views/admin/master_loans/list.php 41
ERROR - 2024-04-29 17:26:41 --> Severity: Notice --> Undefined index: book_id /var/www/html/perpus/application/controllers/admin/Master_loans.php 34
ERROR - 2024-04-29 17:26:41 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:27:07 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:31:22 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:34:24 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:36:20 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/perpus/application/views/admin/master_loans/list.php 46
ERROR - 2024-04-29 17:40:12 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
ERROR - 2024-04-29 17:40:52 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'mysqli' (tried: /usr/lib/php/20190902/mysqli (/usr/lib/php/20190902/mysqli: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/mysqli.so (/usr/lib/php/20190902/mysqli.so: undefined symbol: mysqlnd_global_stats)) Unknown 0
