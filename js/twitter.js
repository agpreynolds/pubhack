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
						console.log(this.keywords);
					}
				});
			});
	}
}