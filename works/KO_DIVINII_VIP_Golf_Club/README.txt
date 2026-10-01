K.O. DIVINII GOLF CLUB — VIP XAMPP BUILD
=========================================

REFERENCE VIDEO
The supplied golf-club / golf-ball 3D reference clip is used as the hero video:
assets/video/ko-divinii-hero.mp4

DESIGN
Premium private-club aesthetic inspired by the supplied clip's close-up golf imagery:
- dark botanical greens + champagne gold + warm ivory
- cinematic video hero
- glass panels, subtle 3D perspective and mouse tilt
- responsive mobile navigation
- reveal-on-scroll motion
- premium typography via Google Fonts (Playfair Display + DM Sans)
- Font Awesome 7.3.1 icons via cdnjs

XAMPP SETUP
1. Extract this folder into:
   C:\xampp\htdocs\ko_divinii_vip_golf_club\
2. Start Apache and MySQL in XAMPP Control Panel.
3. Open http://localhost/phpmyadmin/
4. Open the SQL tab and paste/import database.sql.
5. Open http://localhost/ko_divinii_vip_golf_club/
6. Local admin dashboard: http://localhost/ko_divinii_vip_golf_club/admin/

DATABASE
Database: ko_divinii_golf_club_vip
User: root
Password: blank by default in XAMPP
Change these values in includes/config.php for a real server.

IMPORTANT
The icons/fonts and the optional course imagery on the site load from online CDNs / image hosts.
The reference video and JC emblem are stored locally in the project.

FILES
index.php          Main VIP landing page
membership.php     Membership enquiry form
book.php           Tee-time request form
events.php         Dynamic event calendar
contact.php        Concierge contact form
actions/           PHP form handlers
includes/          DB connection + shared header/footer
admin/             Local development dashboard
assets/             CSS, JavaScript, logo, poster, reference video
database.sql       MySQL schema + sample club events
