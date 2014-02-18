var twitter = twitter || {
	postStatus : function(tweet) {
		$.post('/php/reply.php',tweet)
			.done(function(response){
				console.log('Reply logged successfully');
			});
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
							if ( !$('#'+tweet.id).length ) {
								$.get('/php/output.php',tweet)
									.done(function(response){
										$('#container').prepend(response);
									});
							}
						});
					}
				});
			});
	}
}

$(document).ready(function(){
	twitter.getStatuses();
	setTimeout(twitter.getStatuses,15000);
});