var PracticeLive = {
    config: {
        eventId: null,
    },

    subscribeToEchoChannels: function() {
        var self = this;

        Echo.channel(`forms.${this.config.eventId}`).listen('FormReplied', (e) => {
            self.loadResult();
        });      
    },

    init: function(config) {
        this.config = config;

        this.subscribeToEchoChannels();

        return this;
    },

    onError: function(error) {
        console.error(error);
    },
};

window.PracticeLive = PracticeLive;