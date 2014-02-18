var twitter = twitter || {
	postStatus : function() {
		
	},
	getStatuses : function() {
		var self = twitter;

		$.get('/php/twitter.php')
			.done(function(response){
				response = JSON.parse(response);
				self.tweets = response;

				$(self.tweets).each(function(){
					if (this.keywords.length) {
						feeds.requestNews(this,function(tweet){
							console.log(tweet);
						});
					}
				});
			});
	}
}

$(document).ready(function(){
	setTimeout(twitter.getStatuses,30000);
});