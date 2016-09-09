# _Address Book_

#### _Simple page practicing PHP, 9/9/2016_

#### By _**Anand Angalig**_

## Description

_Users will be able to add new contacts, see all existing contacts made so far, and delete all contacts to clear the address book._

## Setup/Installation Requirements

* _Go to https://github.com/anandangalig/address-book-php.git and clone this repository onto your local machine._
* _To see the code, open the cloned repository in your favorite text editor._
* _To see it in your browser:_
  * _Open terminal and navigate to the top level of the cloned directory and run "composer install"_
  * _Navigate to the web directory and run "php -S localhost:8000"_
  * _Then, open your favorite web-browser and go to URL localhost:8000_


## Known Bugs

_Empty input fields are allowed to proceed ahead and create an empty contact entry._

## Support and contact details

_Please contact me at anandangalig@gmail.com with any feedback_

## Specs:

* _Behavior: The landing page displays an empty form for users to create new contacts._
  * _Input: Fill in - Name: John Doe, Phone Number: 555-666-7777, Address: 123 Main St., Philadelphia, PA 19123 and click on blue "Create" button._
  * _Output: New page displays "Success! You created a Contact" with the details of the entry._
* _Behavior: After successful creation of a contact, the user clicks on on "Go Back to Address Book" button to return._
  * _Input: Click on "Go Back to Address Book" button._
  * _Output: The main Address Book page is displayed with all existing contacts, including the newly created one._
* _Behavior: If user decides to delete all contacts and clear the Address Book, he/she/they clicks the red "Delete All Contacts" button._
  * _Input: Click on "Delete All Contacts" button_
  * _Output: Confirmation page displays message "Address Book Cleared!"_
* _Behavior: After clearing the Address Book, user can go back to the clean main page and re-create new contacts._
  * _Input: Click on "Go Back to Address Book" button_
  * _Output: The main Address Book page is displayed with no Existing Contacts._

### License

*This web-page is licensed under the MIT license.*

Copyright (c) 2016 **_Anand Angalig_**
