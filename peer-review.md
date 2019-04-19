## P3 Peer Review

+ Reviewer's name: M. Bret Blackford
+ Reviwee's name: Michael Cuneo 
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/cuneo24/Project-3>*

*Answer the following questions in regards to the student's project you are reviewing. REMOVE THE INSTRUCTIONS FOR EACH PROMPT when complete. We should only see YOUR ANSWERS.*

## 1. Interface
Address as many of the following points as applicable:

+ What are your initial impressions of the site interface?
 
 I like the asthetic of the site.  The 3-d shadowing of the card is very nice.  Good use of graphics, including Harvard colors and crest.  It would have been preferable if the inut area were shorter, not requiring as much page scrolling.
+ Were there any parts of the interface that you found confusing, or did not work as you expected?

Interface is clean but it is not clear what input areas are required.  Not clear how to input phone number, i.e, xxx-xxx-xxxx, or xxxxxxxxx, or xxx/xxx-xxx
+ Were there any parts of the interface that you thought worked notably well?

Input sections are clear and clean.  It is clear where to eneter data and, for the most part, what type of data is needed.
+ Do you have any suggestions for improvements on the interface?

Try to get input on a single screen (no scrolling), which may require input data in two columns instead of one.
Try to put errors closer to field causing problem, instead of at bottom of screen.
Be clear on what fields are required 


## 2. Functional testing
One challenge of developing software is thinking of all the unexpected ways users might interact with our applications. It's easy to develop &ldquo;blinders&rdquo; to methods of interaction because we know so much about *how* our application works, and so we have a hard time imagining how our interfaces might be misinterpreted. Thus, it can be useful to have an outsider rigorously test our applications with the explicit intention of trying to break it.

Knowing this, it's time to put your reviewee's application to the test. Think of all the unexpected ways their application could be used with the intention of trying to produce some unexpected/undesirable outcome.

Examples...
+ Try submitting a form without entering any data
+ Try submitting a form with entering data in only some of the fields
+ If an input is asking for a number, try entering some of the following combinations: decimal numbers, negative numbers, letters, symbols, an extremely large number, etc.
+ Try and access a URL on their site that likely does not exist (e.g. http://a3.domain.com/asdjfks)
+ Etc.

__Summarize what you tried, and describe any unexpected/undesirable outcomes.__

(Even if you don't find any issues, having the reviewee see what you tried might give them insight into things they did not think to test.)
+ Name can be non-charachters, such as only umbers or special charachters. 
+ Attempted various phone numbers styles, such as 314-999-9999, 314/999-9999, 314.999.9999, and 3149999999. Only all numbers works, but instructions not clear on this.
+ Attempted to leave out several entry fields but all seem required (though not identified as such)
+ Attempted adding html syntax to text entry, such as `<p>Bret</p>` to the First Name field.  No unusual behavior noticed.

## 3. Code: Routes
Skim through the student's code on Github.

Find their routes file (`routes/web.php`). Thinking about ideal Route/Controller organization&mdash; is there any code in this file that should be happening in a Controller?

If yes, describe.
+ `routes/web.php` is very clean. No issues noted.

## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ Is template inheritance used? ## yes ##
+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
+ Did they do anything in PHP that could have been done in Blade? ##none noted##
+ Did they use any Blade syntax/techniques you were unfamiliar with?
+ Small deviation from code standard. Did not indent the following section of code
```php
            @if(old('omitCell') != 'on')
            &emsp;{{'C ' . old('cellPhone')}}
            @endif
            <br>
            {{old('workEmail')}}
            @if(old('omitDepartment') != 'on')
            &emsp;{{old('departmentEmail')}}
            @endif
```
Would expect indentations as below ...
```php
            @if(old('omitCell') != 'on')
              &emsp;{{'C ' . old('cellPhone')}}
            @endif
            <br>
            {{old('workEmail')}}
            @if(old('omitDepartment') != 'on')
              &emsp;{{old('departmentEmail')}}
            @endif
```            
Although not a code problem, wanted to note a more terse way to check inout (just a differnt code style to consider). Below is code used ...
```php
name='omitCell' @if(old('omitCell') == 'on'){{'checked'}}@endif
```
This could be written as ...
```php
name='omitCell' {{ (old('omitCell') == 'on') ? 'checked' : '' }}
```
            

## 5. Code: General
Address as many of the following points as applicable:

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
+ Are there any best practices discussed in course material that you feel were not addressed in the code?
+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
+ Are there any parts of the code that you found interesting/would not have thought to do yourself?
+ Are there any parts of the code that you don't understand?

## 6. Misc
Do you have any additional comments not covered in the above questions?
