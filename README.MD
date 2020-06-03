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

###### Update Github Theme
1. Push theme changes to github branch
2. Merge theme changes to master

###### Update Staging Site Theme
1. Pull theme from master
2. Download Lightsail Instance SSH Key
3. Connect via FTP to Staging site using SSH Key
4. Overwrite Staging site theme folder with updated theme

###### Push Staging to Live
1. Install All-in-One WP Migration Plugin on both Staging and Live sites
1. On Staging site export site via All-in-One WP Migration Plugin with default settings
2. On Live site import prior export file via All-in-One WP Migration Plugin

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
1. Add New Page
2. Add Image Block 
3. Upload Image to Image Block 

###### Gallery Plugin 
1. Navigate to Photo Gallery Plugin within Admin Pannel
2. Select Add New Gallery 
3. Name Gallery 
4. Add Images to Gallery 
5. Add Photo Gallery WordPress Block to Page
6. Select The New Gallery and Slideshow Gallery Type
7. Select Update

<br/>
