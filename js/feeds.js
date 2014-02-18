var feeds = feeds || {
	requestNews : function(tweet,callback) {
		keywords = tweet.keywords.join(',');
		var feed = new google.feeds.Feed("https://news.google.com/news/feeds?q=" + keywords + ",disaster,tragedy,accident,crisis&output=rss&safe=on");
		feed.load(function(result) {
	        if (!result.error) {
				tweet.article = result.feed.entries[0];
				callback(tweet);
			}		
		});
	}
}

google.load('feeds',1);