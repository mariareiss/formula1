<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    #tabs {
      display: flex;
      justify-content: space-around;
      background-color: #ddd;
      padding: 10px;
    }

    #news-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .tab {
      cursor: pointer;
      padding: 10px;
      background-color: #666;
      color: #fff;
    }

    .article {
      width: 300px;
      margin: 10px;
      border: 1px solid #ddd;
      padding: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .article h2 {
      color: #333;
    }

    .article p {
      color: #666;
    }
  </style>
  <title>Formula One News</title>
</head>
<body>
  <header>
    <h1>Formula One News</h1>
  </header>
  <div id="tabs">
    <div class="tab">Link 1</div>
    <div class="tab">Link 2</div>
    <div class="tab">Link 3</div>
    <!-- Add more tabs as needed -->
  </div>
  <section id="news-list">
    <!-- News articles will be dynamically added here -->
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Dummy data for demonstration
      const newsData = [
        { title: 'Exciting Race in Monza', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' },
        { title: 'Team Changes for Next Season', content: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' },
        { title: 'New Circuit Unveiled for Grand Prix', content: 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }
        // Add more dummy data as needed
      ];

      const newsList = document.getElementById('news-list');

      // Populate news articles
      newsData.forEach(article => {
        const articleElement = document.createElement('div');
        articleElement.classList.add('article');
        articleElement.innerHTML = `
          <h2>${article.title}</h2>
          <p>${article.content}</p>
        `;
        newsList.appendChild(articleElement);
      });
    });
  </script>
</body>
</html>
