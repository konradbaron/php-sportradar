# PHP-SportsData

PHP-SportsData is designed to be an easy-to-use wrapper around the [The SportsData API](http://developer.sportsdatallc.com/).
You must first register an account to receive an API key.

PHP-SportsData is meant to become a full list of the SportsData API calls available. Currently, I have only focused on the API calls for the NFL, but my roadmap for this project includes all of the other sports they offer.

##Example Usage
```php
// Instantiate the class
    $nflData = new SportsDataNfl(YOUR_API_KEY,NFL_SEASON,YEAR,WEEK,VERSION,ACCESS_LEVEL,FORMAT,SECURE);
// Get current standings
    $nflData->standings();
```

## Documentation

### NFL

Go to <a href="http://developer.sportsdatallc.com/docs/read/NFL_API">SportsData NFL API</a> for full documentation.

* [SportsDataNfl](#SportsDataNfl)
* [weekly_schedule](#weekly_schedule)
* [season_schedule](#season_schedule)
* [game_statistics](#game_statistics)
* [game_summary](#game_summary)
* [play_by_play](#play_by_play)
* [play_summary](#play_summary)
* [game_boxscore](#game_boxscore)
* [extended_boxscore](#extended_boxscore)
* [game_roster](#game_roster)
* [team_hierarchy](#team_hierarchy)
* [team_roster](#team_roster)
* [injuries](#injuries)
* [game_depth_chart](#game_depth_chart)
* [team_depth_chart](#team_depth_chart)
* [weekly_league_leaders](#weekly_league_leaders)
* [standings](#standings)
* [rankings](#rankings)
* [seasonal_statistics](#seasonal_statistics)

## NFL API

<a name="SportsDataNfl" />
### SportsDataNfl(api_key,nfl_season,year,week,version,access_level,format,secure)

Instantiate the object

__Arguments__

* api_key - Your API key
* nfl_season - Preseason (PRE), Regular Season (REG), Postseason (PST)
* year - Four digit year
* week - 1 - 17 (Week 0 of Preseason is Hall of Fame game)
* version - Whole number (sequential, starting with the number 1)
* access_level - Real-Time (rt), Premium (p), Standard (s), Basic (b), Trial (t)
* format - Format call will be returned (xml, json)
* secure - Boolean (true,false) to send on http or https

__Example__
```php
   $nflData = new SportsDataNfl(YOUR_API_KEY,'REG',2014,16,1,'t','json',false);
```

---------------------------------------

<a name="weekly_schedule" />
### weekly_schedule()

Returns schedule for set week

__Example__
```php
   $nflData->weekly_schedule();
```

---------------------------------------

<a name="season_schedule" />
### season_schedule()

Returns schedule for set season

__Example__
```php
   $nflData->season_schedule();
```

---------------------------------------

<a name="game_statistics" />
### game_statistics(away_team, home_team)

Returns game stats for a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->game_statistics('BAL','HOU');
```

---------------------------------------

<a name="game_summary" />
### game_summary(away_team, home_team)

Returns game summary for a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->game_summary('BAL','HOU');
```

---------------------------------------

<a name="play_by_play" />
### play_by_play(away_team, home_team)

Returns play by play stats for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->play_by_play('BAL','HOU');
```

---------------------------------------

<a name="play_summary" />
### play_summary(away_team, home_team, play_id)

Returns play summary for a given play for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation
* play_id - obtained from play_by_play()

__Example__
```php
   $nflData->play_summary('BAL','HOU','74e0fa3b-1e8d-42b4-ad29-fbe25a2eaea2');
```

---------------------------------------

<a name="game_boxscore" />
### game_boxscore(away_team, home_team)

Returns game box score for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->game_boxscore('BAL','HOU');
```

---------------------------------------

<a name="extended_boxscore" />
### extended_boxscore(away_team, home_team)

Returns extended box score for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->extended_boxscore('BAL','HOU');
```

---------------------------------------

<a name="weekly_boxscore" />
### weekly_boxscore()

Returns box scores for all games on a given week

__Example__
```php
   $nflData->weekly_boxscore();
```

---------------------------------------

<a name="game_roster" />
### game_roster(away_team, home_team)

Returns game roster for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->game_roster('BAL','HOU');
```

---------------------------------------

<a name="team_hierarchy" />
### team_hierarchy()

Returns team hierarchy

__Example__
```php
   $nflData->team_hierarchy();
```

---------------------------------------

<a name="team_roster" />
### team_roster(team)

Returns team roster

__Arguments__

* team - team abbreviation

__Example__
```php
   $nflData->team_roster('HOU');
```

---------------------------------------

<a name="injuries" />
### injuries(away_team, home_team)

Returns injuries for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->injuries('BAL','HOU');
```

---------------------------------------

<a name="game_depth_chart" />
### game_depth_chart(away_team, home_team)

Returns depth chart for a game on a given week

__Arguments__

* away_team - away team abbreviation
* home_team - home team abbreviation

__Example__
```php
   $nflData->game_depth_chart('BAL','HOU');
```

---------------------------------------

<a name="team_depth_chart" />
### team_depth_chart(team)

Returns team depth chart

__Arguments__

* team - team abbreviation

__Example__
```php
   $nflData->team_depth_chart('HOU');
```

---------------------------------------

<a name="weekly_league_leaders" />
### weekly_league_leaders()

Returns league leaders for a given week

__Example__
```php
   $nflData->weekly_league_leaders();
```

---------------------------------------

<a name="standings" />
### standings()

Returns league standings

__Example__
```php
   $nflData->standings();
```

---------------------------------------

<a name="rankings" />
### rankings()

Returns league rankings

__Example__
```php
   $nflData->rankings();
```

---------------------------------------

<a name="seasonal_statistics" />
### seasonal_statistics(team)

Returns seasonal stats for a given team

__Arguments__

* team - team abbreviation

__Example__
```php
   $nflData->seasonal_statistics('HOU');
```


