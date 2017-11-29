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
      item: "<div class=\"col-6 col-sm-3 col-md-3\"><a href=\"http://marketing.cellar.services.clever-cloud.com/catalogues/gregoire-besson/{{filename}}\" download><div class=\"card\"><div class=\"card-body\"><img class=\"img-fluid\" src=\"../img/catalogues/catalogue.png\" alt=\"Gregoire Besson Parts Catalogue {{serie}} - {{model}}\"><br><h6>Serial: {{serie}}</h6><p><small>Model: {{model}}</small></p></div></div></a></div>",
      empty: "We didn't find any results for the search <em>\"{{query}}\"</em>"
    }
  })
);

search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination'
  })
);

search.start();