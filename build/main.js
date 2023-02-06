(async function() {
  "use strict";
  //  Assign variables to dom elements
  const openNav = document.querySelector("[data-openNav]");
  const closeNav = document.querySelector("[data-closeNav]");
  const navContainer = document.querySelector("[data-navContainer]");
  const navItemsContainer = document.querySelector("[data-navItemsContainer]");
  const tabLink = document.querySelectorAll("[data-tablink]");
  const tabContent = document.querySelectorAll("[data-tabcontent]");
  const projectTabLink = document.querySelectorAll("[data-projectTabLink]");
  const projectTabContent = document.querySelectorAll(
    "[data-projectTabContent]"
  );
  const commentCookieLabel = document.querySelector(
    "[for='wp-comment-cookies-consent']"
  );
  const commentSubmitBtn = document.querySelector("input[name='submit']");
  // pulling from functions.php
  const templateUrl = particlesJson.templateUrl;
  // Particle.js is the library I'm using on the header
  /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
  await particlesJS.load(
    `particles-js`,
    `${templateUrl}/vendors/particles.json`,
    function() {
      console.log("particles.json loaded");
    }
  );
  // set nav container width to 100%
  function openNavigation() {
    navContainer.style.width = "100%";
    navItemsContainer.style.opacity = "1";
  }

  // set nav container width back to 0%
  function closeNavigation() {
    navContainer.style.width = "0%";
    navItemsContainer.style.opacity = "0";
  }

  // reveals content of the active tab, in this case, experience description for each job time line under the about section
  function showActiveTab(e) {
    const id = e.target.dataset.id;
    if (id) {
      // remove active class on the tablinks if any
      tabLink.forEach((link) => {
        link.classList.remove("active");
      });
    }
    // adds active class to the current target
    e.target.classList.add("active");
    // removes active class on the tabcontents if any
    tabContent.forEach((content) => {
      content.classList.remove("active");
    });

    // stores the matching id
    const activeContent = document.getElementById(id);
    activeContent.classList.add("active");
  }

  // reveals content of the active tab, in this case, the project page
  function showActiveProjectTab(e) {
    const id = e.target.dataset.id;
    if (id) {
      // remove active class on the tablinks if any
      projectTabLink.forEach((projectLink) => {
        projectLink.classList.remove("project--active");
      });
    }
    // adds active class to the current target
    e.target.classList.add("project--active");
    // checks if id matched 'all'
    if (id === "all") {
      // adds active class on the project contents
      projectTabContent.forEach((projectContent) => {
        projectContent.classList.contains("project--active")
          ? null
          : projectContent.classList.add("animate", "project--active");
      });
    } else {
      // removes active class on the project contents if any
      projectTabContent.forEach((projectContent) => {
        projectContent.classList.remove("project--active", "animate");
      });

      // stores the matching id
      const activeContent = document.querySelectorAll(`[id=${id}]`);
      // console.log(activeContent);
      if (activeContent)
        activeContent.forEach((activeItem) => {
          activeItem.classList.add("animate", "project--active");
        });
    }
  }

  // Attatched eventlisteners
  if (openNav) openNav.addEventListener("click", openNavigation);
  if (closeNav) closeNav.addEventListener("click", closeNavigation);

  // adds eventlistener to all the tabs in about section
  tabLink.forEach((tab) => {
    tab.addEventListener("click", showActiveTab);
  });

  // adds eventlistener to all the tabs in project page
  projectTabLink.forEach((projectLink) => {
    projectLink.addEventListener("click", showActiveProjectTab);
  });
  // WORDPRESS ELEMENTS
  // add classes to form submit button
  if (commentSubmitBtn)
    commentSubmitBtn.classList.add("button", "button--secondary");
  // change text to wp comment cookies consent
  if (commentCookieLabel)
    commentCookieLabel.textContent =
      "Save my name and email in this browser for the next time I leave a comment.";
})();
