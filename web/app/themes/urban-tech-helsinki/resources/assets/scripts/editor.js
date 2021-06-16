import '@wordpress/edit-post';
import domReady from '@wordpress/dom-ready';

var excludeBlockTypes = [
  'core/archives',
  'core/calendar',
  'core/categories',
  'core/latest-posts',
  'core/navigation',
  'core/nextpage',
  'core/latest-comments',
  'core/more',
  'core/rss',
  'core/search',
  'core/social-links',
  'core/tag-cloud',
  'core-embed/amazon-kindle',
  'core-embed/animoto',
  'core-embed/cloudup',
  'core-embed/collegehumor',
  'core-embed/crowdsignal',
  'core-embed/dailymotion',
  'core-embed/facebook',
  'core-embed/flickr',
  'core-embed/hulu',
  'core-embed/imgur',
  'core-embed/instagram',
  'core-embed/issuu',
  'core-embed/kickstarter',
  'core-embed/meetup-com',
  'core-embed/mixcloud',
  'core-embed/polldaddy',
  'core-embed/reddit',
  'core-embed/reverbnation',
  'core-embed/screencast',
  'core-embed/scribd',
  'core-embed/slideshare',
  'core-embed/smugmug',
  'core-embed/soundcloud',
  'core-embed/speaker',
  'core-embed/speaker-deck',
  'core-embed/spotify',
  'core-embed/ted',
  'core-embed/tiktok',
  'core-embed/tumblr',
  'core-embed/twitter',
  'core-embed/videopress',
  'core-embed/vimeo',
  'core-embed/wordpress',
  'core-embed/wordpress-tv',
];
wp.hooks.addFilter('blocks.registerBlockType', 'pw-examples/exclude-blocks', function(settings, name) {
  if (excludeBlockTypes.indexOf(name) !== -1) {
      return Object.assign({}, settings, {
          supports: Object.assign({}, settings.supports, {inserter: false}),
      });
  }
  return settings;
});

domReady(() => {
});
