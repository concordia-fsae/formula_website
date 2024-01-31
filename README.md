# Repository for the formula team website

HOW TO ADD/REMOVE PERSON ON THE TEAM PAGE: 
  - There are 2 sections to be aware of, the directors section and the subsystems sections. They are each respectively between <section...</section>
  - Find the section for the change you want and copy the <div> element with inside the class name: "profile [name]" 
        -->this is an example of a profile and what needs to be changed for new profile (copy this to insert new profile).
``` 
<div class="profile [name] hidden noMove left">
      <div class="goToProfile" id="goTo[Name]"></div>
      <div class="imageWrapper">
          <img class="portrait" src="assets/portraits/[get Photo name added to the assets folder].JPG" alt="">
          <a class="link linkedin" href="[add linkedin link of the person]">
              <svg class="social linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30" fill="black">
                  <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
              </svg>
          </a>
      </div>
      <p class="first">[First name] <span class="last"><br>[LAST NAME]</span></p>
      <p class="position">[position in the team]</p>
</div>
```

  - CHANGE ALSO in the index.html, in the section team:
      <br>--> IMPORTANT: add to both "<"div class="teamSlide"> </div>
      <br>--> this time add this profile code:
```
<div class="profile [name]">
    <div class="imageWrapper">
        <img class="portrait" src="assets/portraits/[person file pic].JPG" alt="">
        <a class="link linkedin" href="team.html#goTo[Name]">
        </a>
    </div>
    <p>[First name] <span class="last"><br>[LAST NAME]</span></p>
</div>
```

  - To remove it is easy, it's just about deleting the div with the profile you wish to remove, do this both on the index.html and the team.html


HOW TO ADD/REMOVE SPONSOR:
  - Very similar to the team profiles, identify sponsorship tier (bronze,silver,gold,platinum), then go to correct div element in the html.
  - In each tier sponsors are seperated 2 by 2, so create a new frameSponso if needed: 

```
<div class="frameSponso two hidden"> <!-- (this can hold 2 sponsors) -->
    <a href="https://quaketek.com/">
        <div class="spacer" id="goToQuaketek"></div>
        <img src="assets/sponsors/Quaketek_360.png" alt="">
    </a>
    <!-- space for other sponsor -->
</div>
```
  - for each sponsor change these: 
```
<a href="[sponsor link]">
    <div class="spacer" id="goTo[Sponsor name]"></div>
    <img src="assets/sponsors/[sponsor file(.png or .svg)].png" alt="">
</a>
```
  - To delete same as for the team page, just verify if the frameSponso still has sponsor left, if not delete it.


