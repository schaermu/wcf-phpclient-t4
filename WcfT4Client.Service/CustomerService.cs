using System;
using System.ServiceModel;
using WcfT4Client.Data;

namespace WcfT4Client.Service
{
    [ServiceBehavior(InstanceContextMode = InstanceContextMode.PerCall, Namespace = "http://github.com/WcfT4Client/Customer")]
    public class CustomerService : ICustomerService
    {
        #region Implementation of ICustomerService

        public CustomerDto GetCustomer(long customerId)
        {
            throw new NotImplementedException();
        }

        public CustomerDto InsertCustomer(CustomerDto operation)
        {
            throw new NotImplementedException();
        }

        public CustomerDto UpdateCustomer(CustomerDto operation)
        {
            throw new NotImplementedException();
        }

        public void DeleteCustomer(long customerId)
        {
            throw new NotImplementedException();
        }

        public CustomerDto SetAdress(long customerId, AdressDto operation)
        {
            throw new NotImplementedException();
        }

        #endregion
    }
}
