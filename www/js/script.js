const API_KEY = '68e517bdde4f40b492ca76756fdb78b2';
const choicesElem = document.querySelector('.js-choice');
const newsList = document.querySelector('.news-list');

const choices = new Choices(choicesElem, {
   searchEnabled: false,
   itemSelectText: '',
});

const getData = async (url) => {
  const response = await fetch(url +'&apiKey='+ API_KEY);
  const data = await response.json();

  return data
};

const renderCard = (data) => {
   newsList.textContent = '';
   data.forEach(news => {
      const card = document.createElement('li');
      card.className = 'news-item';

      card.innerHTML = `
         <img src="${news.urlToImage}" alt="${news.title}" class="news-img" width="270" height="200">
         <h3 class="news-title">
             <a href="${news.url}" class="news-link" target="_blank">${news.title}</a>
         </h3>
         <p class="news-description">${news.description}</p>
         <div class="news-footer">
             <time class="news-datetime" datetime="${news.publishedAt}">
                 <span class="news-date">${news.publishedAt}</span> 11:06
             </time>
             <div class="news-author">${news.author}</div>
         </div>
      `;

      newsList.append(card);
   })
}

const loadNews = async () => {
  const data = getData('/news.php?country=ru').then(data => renderCard(data.articles));
  
};

loadNews();