## About BlogPost

BlogPost is a blog website which contain almost all feature to maintain blog.Like traditional blog-site , it have two part frontend and backend.Used Stand Blog
Template for frontend purpose.According to necessity, i changed frontend from backend.Used sb dashboard template for backend activity.

## Features

1. Custom Registration and login : Designed and developed registration and login page in lieu of Breeze default one.
2. Manage Post : There are facility to add , show, update, delete for specific post.
3. Manage Category and Sub Category : According to category , the list of sub category will visible and user can select specific one.Jquery-ajax functionality is used for this purpose.
4. Tags : Many to many relationship is established between post and tag.
5. Post Search : To find out a post quickly , Searching functionality is developed.
6. Pagination : Applied pagination where necessary.
7. Type oriented post : User can get specific post according to their desire.As a example, if one click on particular category it gives all post of that category.This behaviour is same for sub category and tag.

## Best practices

Several industry oriented practice is followed.
- Templating : To acheive code reusability, master.blade.php file is used many time and page content change according to purpose.@yield is used to acheive this goal.
- Code reusability : Code reusability is not only be applied for templating but also many other places.Such as, singlePostCategory.blade.php is developed to fulfill purpose of singlePostCategory,singlePostSubCategory and singlePostTag.
- Process of data through dependency injection instead of using class directly.
- Maintained the flow of MVC architecture. 


## Template Credit
- Stand blog template
- [Sb admin dashboard](https://startbootstrap.com/previews/sb-admin)

## Built With

* [Laravel 9](https://laravel.com/docs/9.x)
* [Jquery](https://jquery.com/)
* Bootstrap 5

## Package used
1. Breeze
2. Laravel Collective

## Visit BlogPost
- BlogPost : http://blogpost.projectbysaiful.com/

## Upcoming Features
- Spatie multiple authentication : Through this project , only admin user can upload post and general user can view.role-based authentication will be added soon.
- Comment and reply functionality.
