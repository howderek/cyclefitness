/***********************************/
/*          CYCLE FITNESS          */
/*      (c) 2015 Derek Howard      */
/*    one global, lints cleanly    */
/***********************************/

/*jslint browser:true*/

//initialize the site
var CycleFitness = (function () {
    'use strict';
    CycleFitness = {};
    var buttons = ['getYourBike'],
        modalSet = document.getElementById('modals').children,
        modals = {},
        i = 0,
        navActive = false;
    
    //shows the beautiful modals
    //usage: CycleFitness.showModal('Hello, World!');
    CycleFitness.showModal = function (html) {
        var modal = document.createElement('div'),
            overlay = document.createElement('div'),
            close = function () {
                document.body.removeChild(modal);
                document.body.removeChild(overlay);
                document.getElementById('content').style.webkitFilter = '';
            };
            
        modal.id = 'modal';
        overlay.id = 'overlay';
        modal.innerHTML = html;
        overlay.onclick = close;
        document.getElementById('content').style.webkitFilter = 'blur(10px)';
        document.body.appendChild(overlay);
        document.body.appendChild(modal);
        document.getElementById('modal').innerHTML = html;
        document.getElementById('overlay').onclick = close;
    };
    
    CycleFitness.toggleNav = function () {
        navActive = !navActive;
        document.getElementsByTagName('nav')[0].className = (navActive) ? 'visible' : 'desktop';
        document.getElementById('social').className = (navActive) ? '' : 'desktop';
    };
    
    document.getElementById('dropdown').onclick = CycleFitness.toggleNav;
    document.getElementById('close').onclick = CycleFitness.toggleNav;
    
    CycleFitness.homepage = function () {
        for (i = 0; i < modalSet.length; i += 1) {
            modals[modalSet[i].dataset.modal] = modalSet[i].innerHTML;
        }

        buttons.forEach(function (name) {
            document.getElementById(name).onclick = function () { CycleFitness.showModal(modals[name]); };
        });
    };
    
    //returns events within a certain date
    //usage: CycleFitness.events(20)
    //                           ^ returns events that happen within the next 20 days
    CycleFitness.events = function (daysAhead) {
        var eventHTML = document.createElement('div'),
            date = Date.parse(new Date()),
            //example events data - in a production environments this data would be downloaded using AJAX
            events = [
                {
                    name: 'Bike Safety Seminar',
                    type: 'seminar',
                    dates: ['January 10, 2015', 'February 13, 2015', 'March 7, 2014', 'April 11, 2015', 'May 9, 2014', 'June 13, 2015', 'July 11, 2014'],
                    description: 'Learn about the basics of bike safety, including the different types of helmets, New York laws that affect cyclists, and responsible cycling on the road. Free entry, 1 p.m.'
                },
                {
                    name: 'Central Park Ride',
                    type: 'ride',
                    dates: ['January 15, 2015', 'February 18, 2015', 'March 12, 2014', 'April 16, 2015', 'May 14, 2014', 'June 18, 2015', 'July 16, 2014'],
                    description: 'Join us on a short scenic ride through Central Park. The ride starts at Cycle Fitness at 9 a.m. More details at the store. Free event; $20 bike rental fee if you do not own a bicycle.'
                },
                {
                    name: 'Route Planning Seminar',
                    type: 'seminar',
                    dates: ['January 17, 2015', 'February 20, 2015', 'March 14, 2014', 'April 18, 2015', 'May 16, 2014', 'June 20, 2015', 'July 18, 2014'],
                    description: 'A seminar about planning commuter routes in New York City. Includes details on the best sources of updated bicycle route information and common cycling routes. Free entry, 1 p.m.'
                },
                {
                    name: 'Times Square and Brooklyn Bridge Ride',
                    type: 'ride',
                    dates: ['January 20, 2015', 'February 23, 2015', 'March 17, 2015', 'April 20, 2015', 'May 19, 2014', 'June 23, 2015', 'July 21, 2015'],
                    description: 'See the most popular tourist destinations with us. Night ride. Meets at Brooklyn Bridge park at 8 p.m. and ends at Cycle Fitness. Ride is approximately 2 hours long. Free event.'
                },
                {
                    name: 'Harriman State Park Trail Ride',
                    type: 'ride',
                    dates: ['January 22, 2015', 'February 25, 2015', 'March 19, 2015', 'April 22, 2015', 'May 21, 2014', 'June 25, 2015', 'July 23, 2015'],
                    description: 'Bike on the beautiful trails of Harriman State Park. Meet at park at 3 p.m. Bus transportation at 10 a.m. from Cycle Fitness provided for $100. $20 bike rental fee if you do not own a bicycle.'
                },
                {
                    name: 'Mountain Biking Safety',
                    type: 'seminar',
                    dates: ['January 24, 2015', 'February 27, 2015', 'March 21, 2014', 'April 25, 2015', 'May 23, 2014', 'June 27, 2015', 'July 25, 2014'],
                    description: 'Get information about how to stay safe on the trails, what to do if you get lost, and practical first aid tips from our guest speaker Kaity Cox.'
                },
                {
                    name: 'River Road Bicycle Ride',
                    type: 'ride',
                    dates: ['January 27, 2015', 'February 30, 2015', 'March 24, 2015', 'April 27, 2015', 'May 26, 2014', 'June 30, 2015', 'July 28, 2015'],
                    description: 'Ride on the scenic River Road and see the beautiful natural beauty of Interstate Park. Begins and ends at Cycle Fitness. Half Century bike ride. Roughly 4 hours. Meets at Cycle Fitness at 1 p.m.'
                }
            ],
            relevantEvents = [];
        daysAhead = daysAhead || 200;
        events.forEach(function (event) {
            var i = 0,
                eventDate;
             //edit to change default number of days to pull events from
            for (i = 0; i < event.dates.length; i += 1) {
                eventDate = Date.parse(event.dates[i]);
                if (eventDate - date < (daysAhead * 86400000) && eventDate - date > 0) {
                    relevantEvents.push({
                        name: event.name,
                        type: event.type,
                        date: event.dates[i],
                        description: event.description
                    });
                }
            }
        });
        return relevantEvents;
    };
    
    //builds the events page
    CycleFitness.buildEventsPage = function () {
        var events = CycleFitness.events();
        
        events.forEach(function (event) {
            var eventDiv = document.createElement('div'),
                date = document.createElement('div'),
                description = document.createElement('div'),
                month = document.createElement('div'),
                day = document.createElement('div'),
                heading = document.createElement('h1'),
                text = document.createElement('p'),
                eventDate = new Date(event.date);
            eventDiv.className = 'row event ' + event.type;
            date.className = 'date';
            month.className = 'month';
            day.className = 'day';
            description.className = 'description';
            month.innerHTML = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'November', 'December'][eventDate.getMonth()];
            day.innerHTML = eventDate.getDate();
            heading.innerHTML = event.name;
            text.innerHTML = event.description;
            date.appendChild(month);
            date.appendChild(day);
            description.appendChild(heading);
            description.appendChild(text);
            eventDiv.appendChild(date);
            eventDiv.appendChild(description);
            document.getElementById('events').appendChild(eventDiv);
        });
        
    };
    
    return CycleFitness;
    
}());

