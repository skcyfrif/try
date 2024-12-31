(=);/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */;;;;;/**
 * Slack record utility helping to log to Slack webhooks or API.
 *
 * @author Greg Kedzierski <greg@gregkedzierski.com>
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 * @see    https://api.slack.com/docs/message-attachments
 */{=;=;=;=;/**
     * Slack channel (encoded ID or name)
     * @var string|null
     */;/**
     * Name of a bot
     * @var string|null
     */;/**
     * User icon e.g. 'ghost', 'http://example.com/user.png'
     * @var string|null
     */;/**
     * Whether the message should be added to Slack as attachment (plain text otherwise)
     * @var bool
     */;/**
     * Whether the the context/extra messages added to Slack as attachments are in a short style
     * @var bool
     */;/**
     * Whether the attachment should include context and extra data
     * @var bool
     */;/**
     * Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     * @var array
     */;/**
     * @var ?FormatterInterface
     */;/**
     * @var NormalizerFormatter
     */;(?=,?=,=,?=,=,=,=(),=){()()()()()()()();(){=();}}/**
     * Returns required data in format that Slack
     * is expecting.
     */():{=();=();(){[]=;}(){[]=;}(!){=();}{=[];}(){=(,,([]),(),(),[](),);(){[]=[];}{[]=;[][]=(,[]);}(){((,)){(([])){;}(){[][]=(,[]);}{// Add all extra fields as individual fields in attachment
[]=([],([]));}}}[]=();}{[]=;}(){((,)){[]=;}{[]="}";}};}/**
     * Returns a Slack message attachment color associated with
     * provided level.
     */():{(){:;:;:;:;}}/**
     * Stringifies an array of key/value pairs to be used in attachment fields
     */():{=();=((,));=!(((),));?(,|):(,);}/**
     * Channel used by the bot when posting
     *
     * @param ?string $channel
     *
     * @return static
     */(?=):{=;;}/**
     * Username used by the bot when posting
     *
     * @param ?string $username
     *
     * @return static
     */(?=):{=;;}(=):{=;;}(?=):{=;(()){=(,);};}(=):{=;;}(=):{=;(){=();};}(=[]):{=;;}(?=):{=;;}/**
     * Generates attachment field
     *
     * @param string|array $value
     */(,):{=()?(,((),,)):;((),,,);}/**
     * Generates a collection of attachment fields from array
     */():{=();(()){[]=(,);};}/**
     * Get a copy of record with fields excluded according to $this->excludeFields
     */():{(){=(,);=&;=();(){(!([])){;}(){([]);;}=&[];}};}}