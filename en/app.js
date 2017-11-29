var search = instantsearch({
  // Replace with your own values
  appId: 'BG3AX4OCRB',
  apiKey: '0a5e0edb3588b17ea4255c35f077e00d', // search only API key, no ADMIN key
  indexName: 'catalogues',
  urlSync: true
});

search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#search-input'
  })
);

search.addWidget(
  instantsearch.widgets.hits({
    container: '#hits',
    hitsPerPage: 8,
    templates: {
      item: document.getElementById('hit-template').innerHTML,
      empty: "We didn't find any results for the search <em>\"{{query}}\"</em>"
    }
  })
);

search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination',
    maxPages: 100,
  })
);

search.start();