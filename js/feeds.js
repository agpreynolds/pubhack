var feeds = feeds || {
	requestNews : function(tweet,callback) {
		keywords = tweet.keywords.join(',');
		var feed = new google.feeds.Feed("https://news.google.com/news/feeds?q=" + keywords + "&output=rss&safe=on");
		feed.load(function(result) {
	        if (!result.error) {
				tweet.article = result.feed.entries[0];
				callback(tweet);
				// var container = document.getElementById("news");
				// for (var i = 0; i < result.feed.entries.length; i++) {
				// 	var entry = result.feed.entries[i];
				// 	var div = document.createElement("div");
				// 	div.appendChild(document.createTextNode(entry.title));
				// 	container.appendChild(div);
				// }
			}		
		});
	}
}

google.load('feeds',1);

// google.setOnLoadCallback(initialize);