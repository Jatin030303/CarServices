// This is script of FAQ
function toggleContent(element) {
    var content = element.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      element.style.backgroundColor = "#f2f2f2";
    } else {
      content.style.display = "block";
      element.style.backgroundColor = "#ddd";
    }
  }
  // Select all the comments and the arrow button
const comments = document.querySelectorAll('.comment_boder .comment');
const arrow = document.querySelector('#arrow');

// Hide comments
comments.forEach(comment => {
  comment.style.display = 'none';
});

// Show the first comment 
comments[0].style.display = 'block';

// Set the duration 
const intervalDuration = 15000; 

//  automatically switch to the next comment
let currentIndex = 0;
const intervalId = setInterval(() => {
  comments[currentIndex].style.display = 'none';
  // Show the next comment if it exists, otherwise show the first comment
  currentIndex = (currentIndex + 1) % comments.length;
  comments[currentIndex].style.display = 'block';
}, intervalDuration);

//  manually switch to the next comment
arrow.addEventListener('click', () => {
  clearInterval(intervalId);

  comments[currentIndex].style.display = 'none';

  currentIndex = (currentIndex + 1) % comments.length;
  comments[currentIndex].style.display = 'block';

  // Restart the interval
  setInterval(() => {
    // Hide the currently displayed comment
    comments[currentIndex].style.display = 'none';

    // Show the next comment if it exists, otherwise show the first comment
    currentIndex = (currentIndex + 1) % comments.length;
    comments[currentIndex].style.display = 'block';
  }, intervalDuration);
});