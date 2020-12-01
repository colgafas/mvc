# Software developer test

### Context
This test consists of a form to create stores, used to save stores to the database.

A show store view, used to show the details of a saved store.

A list of create city issues view, used to approve or disapprove new cities submitted by users.

The stores have the following fields:
name, code, address and city_id. The detailed info is in the file "database.sqlite".

### 1. Hanlde the form request

You should create and endpoint to handle the request from the form submission, 
you should validate the data and handle errors(inform the user), 
if the validation passes then the store must the saved in the database. If the requests has
manual inputs for the country, store or city, an issue for new city must be created, you should modify the database 
design to store in some place of the db the issues requesting for new cities. 
Then a redirection response should be returned to the user redirecting him/her to the show store view. 
Modify the show store view as necessary.

### 2. Create a CitySelector component

We'd like to use a component which allows us to select a city in a form. The component should allow 
the user to  select in three dropdowns first the country, then the state and lastly the actual city, 
none of the country, state or city of any new store are assured to be already available in the database, 
so each of the fields should have the capability of transform itself into a text field, to allow the user 
to manually input the name of the three inputs, eg: 

* Case 1: If the user choose to manually input the country, all three dropdowns should transform into text inputs, and
the user should enter the country, the state and the city in each corresponding text input field,

* Case 2: If the user selects the country from the existing options in the dropdown and then choose to manually input the state, 
the state and city dropdowns should transform into text inputs and, the user should enter the 
state and the city in each corresponding text input field.

* Case 3: If the user select the country and the state from the existing options in the dropdowns,
and then choose to manually input the city, the city dropdown should transform into a text input, 
and the user should enter the city in the corresponding text input field.

In any of the steps the user should be able to cancel the manual input and return to the dropdowns with the already 
available data in the database.



### 3. List the new cities issues requests

In the endpoint /issues you should list all the issues for new cities, each issue should have a button for 
approve or reject the issue for creating a new city in some state and country. 

* When the approve button is pressed, a new city with the data provided by the user
 should be created and the corresponding store
 with what the issue was created should be associated with the newly created city. 

* If the user presses the reject button the data associated with the new city issue request should be deleted.

### 4. The show store view
The show store view show the details of a store. There are three variants,
When there is a city associated to the store, second when there is a 
new city issue associated to the store, and last where there is no city 
nor new city issue associated to the store.

You must modify the stores/show.php view to take into account the second and third scenarios.

* In the show store view should be shown the issue for a new 
city when there is one, displaying the info associated.

* In the show store view if no city is associated with the store nor there is an issue for a new city, 
  there should be a form with only the CitySelector component as inputs, with the ability of updating 
  the city or creating a new issue for a new city to associate with the store.
  
## How to run the application

You can use your local environment or use the docker image provided 
in the docker directory:

```shell script
cd docker 
docker build . -t colgafas/mvc
docker run -p 8080:8080 -v ~/path/to/mvc:/var/www/html colgafas/mvc
```