# WordPress Age Attribute Plugin

This WordPress plugin adds an Age attribute to users and makes it available in the WP REST API. The plugin has the following features:

* Age must be a positive numerical value.
* Age is manageable through the WordPress admin area.
* Age is available in the WP REST API, with contexts for adding, viewing, and editing the attribute.

To implement the plugin, I followed the Model-View-Controller (MVC) design pattern. The following steps outline the process I followed to create the plugin:

1. Added the Age field to the user profile page in the WordPress admin area, using the **show_user_profile** and **edit_user_profile** action hooks.
2. Used the **edit_user_profile_update** and **personal_options_update** action hooks to save the Age field when the user profile is updated.
3. Implemented server-side validation to ensure that the Age field is a positive numerical value.
4. Created a WordPress REST API endpoint for viewing the Age attribute of a user. The endpoint is available at **/age-attribute/v1/users/{user_id}/age** and accepts GET requests.
5. Added support for adding and editing the Age attribute in the WordPress REST API available at **/age-attribute/v1/users/{user_id}/age/create** and **/age-attribute/v1/users/{user_id}/age/update**, respectively.

