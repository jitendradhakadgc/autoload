# autoload
this is for testing autoload for me

1. Create composer.json file in root folder
put thie content 
{
    "autoload": {
        "psr-4": {
            "YourNamespace\\": "src/"
        }
    }
}

2. Create a includes folder and create some cleass with classs name and file name will be same 
3. if you create with diffrent namespace then define in composer file 
4. then run this command to create vendor folder 

composer dump-autoload


