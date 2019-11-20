<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'localhost';
$mysql_username = 'fellowcp_aditalic1';
$mysql_password = 'w&2xqEf3bYpb';
$mysql_db = 'fellowcp_dbolditalicus';

$mysql_bin_path = '/usr/bin';

# Base URL of the installation
$baseurl = 'https://italicus.markratcliff.com';

# Email settings
$email_notify = 'studio@deartocreative.com';
$email_from = 'studio@deartocreative.com';
# Secure keys
$spider_password = 'EreduZAvYhAz';
$scramble_key = 'YbYWY8eZeBe3';
$api_scramble_key = 'U9uLeMYJa6EQ';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$ffmpeg_path = '/usr/bin';
$exiftool_path = '/usr/local/bin';
$homeanim_folder = 'filestore/system/slideshow_f2d4b9ec4c24560';


/*


New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

$contact_link=false;

$slideshow_big=true;
$home_slideshow_width=1920;
$home_slideshow_height=1080;

$themes_simple_view=true;
$themes_category_split_pages=true;
$theme_category_levels=8;

$stemming=true;
$case_insensitive_username=true;
$user_pref_user_management_notifications=true;
$themes_show_background_image = true;

$use_zip_extension=true;
$collection_download=true;

$ffmpeg_preview_force = true;
$ffmpeg_preview_extension = 'mp4';
$ffmpeg_preview_options = '-f mp4 -b:v 1200k -b:a 64k -ac 1 -c:v h264 -c:a aac -strict -2';

$daterange_search = true;
$upload_then_edit = true;
$search_filter_nodes = true;

$purge_temp_folder_age=90;