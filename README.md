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
9. Multiple authentication : 4 types of user here: Admin,Observer,Editor,General user.When any user register a account , they register as General user.User-role system is developed by which admin can assign role to general user.Role assignment by admin can be editor,observer.Admin can view role and its assigned user as list.Admin can do anything such as view,update and delete in any user post.Editor can only edit users post but cannot delete.Observer can only view users post but cannot do any operation on it.General users can only view their post and manage.Editor,Observer,General user cannot go to admin portion through url.Managing category,sub category,tag can be managed by admin,so other users do not get this functionality.
10. Any logged in user can comment and replay 
11. Instead of default breeze profile,custom profile section is designed and developed.Division,district,upazila upadate facility is added.For this purpose one package is used that is known as [laravel-bangladesh-geocode](https://github.com/devfaysal/laravel-bangladesh-geocode)

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
3. Spatie

## Visit BlogPost
- BlogPost : http://blogpost.projectbysaiful.com/

## Upcoming Features
- Responsiveness
