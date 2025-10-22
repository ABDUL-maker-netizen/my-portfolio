// counter for html
let counter = 0;
let maxCounter = 99;
const bar = document.getElementById("progressBar1");
let started = false;

function startProgress() {
  if (started) return; // prevent restarting
  started = true;

  const cinterval = setInterval(incrementCounter, 50);

  function incrementCounter() {
    if (counter >= maxCounter) {
      clearInterval(cinterval);
    } else {
      counter++;
      bar.style.width = counter + "%";
      bar.textContent = counter + "%"; // added % for clarity
    }
  }
}

//detect when the progress bar is visible in viewport
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        startProgress();
      }
    });
  },
  { threshold: 0.6 }
);

observer.observe(bar);

// counter for css
let counters = 0;
let maxCounters = 98;
const bars = document.getElementById("progressBar2");
let starteds = false;

function startProgresss() {
  if (starteds) return; // prevent restarting
  starteds = true;

  const cintervals = setInterval(incrementCounters, 50);

  function incrementCounters() {
    if (counters >= maxCounters) {
      clearInterval(cintervals);
    } else {
      counters++;
      bars.style.width = counters + "%";
      bars.textContent = counters + "%"; // added % for clarity
    }
  }
}

//detect when the progress bar is visible in viewport
const observers = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        startProgresss();
      }
    });
  },
  { threshold: 0.6 }
);

observers.observe(bar);

// counter for bootstrap
let bootstrapCounter = 0;
let bootstrapMaxcounters = 98;
const bootstrapp = document.getElementById("progressBar3");
let bootstrapStarted = false;

function bootstrapStartprogress() {
  if (bootstrapStarted) return; // prevent restarting
  bootstrapStarted = true;

  const bootstrapCintervals = setInterval(bootstrapIncrementcounters, 50);

  function bootstrapIncrementcounters() {
    if (bootstrapCounter >= bootstrapMaxcounters) {
      clearInterval(bootstrapCintervals);
    } else {
      bootstrapCounter++;
      bootstrapp.style.width = bootstrapCounter + "%";
      bootstrapp.textContent = bootstrapCounter + "%"; // show %
    }
  }
}

// detect when the progress bar is visible in viewport
const bootstrapObservers = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        bootstrapStartprogress();
      }
    });
  },
  { threshold: 0.6 }
);

bootstrapObservers.observe(bootstrapp);

// counter for js

let jsCounter = 0;
let jsMaxcounters = 97;
const js = document.getElementById("progressBar4");
let jsStarted = false;

function jsStartprogress() {
  if (jsStarted) return; // prevent restarting
  jsStarted = true;

  const jsCintervals = setInterval(jsIncrementcounters, 50);

  function jsIncrementcounters() {
    if (jsCounter >= jsMaxcounters) {
      clearInterval(jsCintervals);
    } else {
      jsCounter++;
      js.style.width = jsCounter + "%";
      js.textContent = jsCounter + "%"; // show %
    }
  }
}

// detect when the progress bar is visible in viewport
const jsObservers = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        jsStartprogress();
      }
    });
  },
  { threshold: 0.6 }
);

jsObservers.observe(js);

//counter for php

let phpCounter = 0;
let phpMaxcounters = 98;
const php = document.getElementById("progressBar5");
let phpStarted = false;

function phpStartprogress() {
  if (phpStarted) return; // prevent restarting
  phpStarted = true;

  const phpCintervals = setInterval(phpIncrementcounters, 50);

  function phpIncrementcounters() {
    if (phpCounter >= phpMaxcounters) {
      clearInterval(phpCintervals);
    } else {
      phpCounter++;
      php.style.width = phpCounter + "%";
      php.textContent = phpCounter + "%"; // show %
    }
  }
}

// detect when the progress bar is visible in viewport
const phpObservers = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        phpStartprogress();
      }
    });
  },
  { threshold: 0.6 }
);

phpObservers.observe(php);

//counter for mysql

let mysqlCounter = 0;
let mysqlMaxcounters = 98;
const mysql = document.getElementById("progressBar6");
let mysqlStarted = false;

function mysqlStartprogress() {
  if (mysqlStarted) return; // prevent restarting
  mysqlStarted = true;

  const mysqlCintervals = setInterval(mysqlIncrementcounters, 50);

  function mysqlIncrementcounters() {
    if (mysqlCounter >= mysqlMaxcounters) {
      clearInterval(mysqlCintervals);
    } else {
      mysqlCounter++;
      mysql.style.width = mysqlCounter + "%";
      mysql.textContent = mysqlCounter + "%"; // show %
    }
  }
}

// detect when the progress bar is visible in viewport
const mysqlObservers = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        mysqlStartprogress();
      }
    });
  },
  { threshold: 0.6 }
);

mysqlObservers.observe(mysql);

document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Stop normal page reload

  const form = e.target;
  const formData = new FormData(form);

  fetch("process_contact.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      const alertBox = document.getElementById("form-alert");

      if (data.status === "success") {
        alertBox.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show mt-2">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Success!</strong> ${data.message}
        </div>`;
        form.reset();
      } else {
        alertBox.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show mt-2">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Error!</strong> ${data.message}
        </div>`;
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
