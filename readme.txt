************************************************
* Genba Digital Distribution API Sample Client *
************************************************


* * * Purpose of the sample client * * *

This sample client is meant for software developers who are implementing a solution
in which the Genba Digital Distribution API is consumed.
The code in this solution can be viewed as an example of how such an implementation
might look like.
This sample client is *NOT* meant to be production ready code, nor do we suggest you
copy and paste any of the code in this sample client and use it in a production system.
This sample client is only meant to give developers ideas and inspiration.
The sample client uses an SDK that was exported from Swagger Hub. These are all the
files in the SwaggerClient-php folder. You can make a free account at Swagger Hub
and do the same. Simply copy the OpenAPI definition file from the doc page and import
it in Swagger Hub.
Besides the SDK the only other external dependency is the PHP JWT library from Firebase,
which is loaded via composer.


* * * Usage of the sample client * * *

To use the sample client, the only thing you need to do is the following
- Open config.php
- Enter the correct information for:
  > [YOUR_CUSTOMER_ACCOUNT_NUMBER]
  > [LOCATION_TO_YOUR_CERTIFICATE]
  > [PASSWORD_OF_YOUR_CERTIFICATE]
- Run index.php

In the result you will see the multiple steps that the client goes through, and then
perform a ping to the service, as well as retrieve two pages of products and prices.


* * * Disclaimer * * *

THIS SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THIS SOFTWARE OR THE USE OR OTHER
DEALINGS IN THIS SOFTWARE.