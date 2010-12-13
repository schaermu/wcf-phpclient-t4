using System.ServiceModel;
using WcfT4Client.Data;

namespace WcfT4Client.Service
{
    [ServiceContract]
    public interface ICustomerService
    {
        CustomerDto GetCustomer(long customerId);

        CustomerDto InsertCustomer(CustomerDto operation);

        CustomerDto UpdateCustomer(CustomerDto operation);

        void DeleteCustomer(long customerId);

        CustomerDto SetAdress(long customerId, AdressDto operation);
    }
}
