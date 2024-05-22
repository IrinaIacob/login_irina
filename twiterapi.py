import requests
import tweepy
import pandas as pd

consumer_key = "3t4nRS5dzJWrLyTTmcG8CTGFe"
consumer_secret = "RyG9E0Ejjzcn3SMo4Hlai7dvqRVOLXpNYhnxPoN7XDgXB2HF41"
acces_token = "AAAAAAAAAAAAAAAAAAAAAOyltwEAAAAAyicNyc1LCOWXyqIhJ2aV1CDDzUo%3DPBczdlTrDTVeTlXjdtUftIDE2Tqo4oWD2eloZKag3AqAKuBjSY"

auth = tweepy.OAuth1UserHandler{consumer_key, consumer_secret, acces_token}

api = tweepy.API(auth, wait_on_rate_limit=True)

search_query = "'Elon Musk'"

