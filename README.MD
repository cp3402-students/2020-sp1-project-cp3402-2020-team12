# Townsville Jazz Club Wordpress Theme  
Based on [Underscores](https://underscores.me/)
<br/>

## Authors

- Checnchecn Xiong
- Harvey Adlam
- Jarod Hine
- Luke Maclean
- Sheena Mcqueen
<br/>

## Workflow
###### Update Local Development
1. On Staging site export all content to file via All-in-One WP Migration Plugin
2. On local wordpress instance import prior export file via All-in-One WP Migration Plugin

###### Update Staging Site Theme
1. Push theme changes to github branch
2. Merge theme changes to master
3. Rebase local github branch to master
4. Download Lightsail Instance SSH Key
5. Connect via FTP to Staging site using SSH Key
6. Overwrite theme folder with updated files

###### Push Staging to Live
1. On Staging site export only database, plugin and media files via All-in-One WP Migration Plugin
2. On Live site import prior export file via All-in-One WP Migration Plugin
3. On Staging site export all content to file via All-in-One WP Migration Plugin
4. On local wordpress instance import prior export file via All-in-One WP Migration Plugin
5. Save local wp-content folder
5. Download Lightsail Instance SSH Key
6. Connect via FTP to Live site using SSH Key
7. Overwrite Live wp-content folder with local wp-content folder

###### Update Site Content
- All site content is directly created on staging site see Content Creation section.

<br/>

## Content Creation
###### Event
1. Add New Post in Post Dashboard
2. Add Post Content
3. Set Post Category to Events
4. Publish Post

Event post will automatically be displayed on Events Page in reverse chronological order, to change where the event will displayed in the order edit the date field.

###### New Band/History/Gallery Page
1. Add New Page in Page Dashboard
2. Add Page Content
3. Set Parent Page to respective Parent of Bands, History or Gallery
4. Add New Page to Main Menu via Appeareance -> Menus

###### Gallery Image
//TODO
<br/>
